<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string', 'min:6'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'ইমেইল দিতে হবে।',
            'email.string' => 'ইমেইল অবশ্যই টেক্সট হতে হবে।',
            'email.email' => 'সঠিক ইমেইল এড্রেস দিন।',

            'password.required' => 'পাসওয়ার্ড দিতে হবে।',
            'password.string' => 'পাসওয়ার্ড অবশ্যই টেক্সট হতে হবে।',
            'password.min' => 'পাসওয়ার্ড ন্যূনতম ৬ অক্ষরের হতে হবে।',
        ];
    }
}
