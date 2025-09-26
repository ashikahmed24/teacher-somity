<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'success' => false,
                'message' => 'প্রদত্ত তথ্য দিয়ে লগইন করা সম্ভব হয়নি। আপনার ইমেইল ও পাসওয়ার্ড যাচাই করুন।',
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = Auth::user();

        // Check if disabled
        if ($user->disabled) {
            Auth::logout();
            return response()->json([
                'success' => false,
                'message' => 'আপনার একাউন্ট নিষ্ক্রিয় করা হয়েছে। দয়া করে সহায়তার জন্য যোগাযোগ করুন।',
            ], Response::HTTP_FORBIDDEN);
        }


        $token = $user->createToken('api_token')->plainTextToken;

        return response()->json([
            'success' => true,
            'message' => 'আপনি সফলভাবে লগইন করেছেন!',
            'token' => $token,
            'user' => [
                'name' => $user->name,
                'email' => $user->email,
                'avatar_url'  => $user->avatar_url,
            ],
        ]);
    }
}
