<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UpazilaController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\InstitutionTypeController;

// Route group for guest user only
Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
});


Route::scopeBindings()->group(function () {

    Route::middleware(['auth:sanctum'])->group(function () {
        Route::prefix('divisions')->group(function () {
            Route::get('/dropdown', [DivisionController::class, 'dropdown']);
            Route::get('/', [DivisionController::class, 'index']);
            Route::get('/{division}', [DivisionController::class, 'show']);
            Route::post('/', [DivisionController::class, 'store']);
            Route::put('/{division}', [DivisionController::class, 'update']);
            Route::delete('/{division}', [DivisionController::class, 'destroy']);
            Route::get('/{division}/districts', [DivisionController::class, 'districts']);
        });

        Route::prefix('districts')->group(function () {
            Route::get('/', [DistrictController::class, 'index']);
            Route::get('/{district}', [DistrictController::class, 'show']);
            Route::post('/', [DistrictController::class, 'store']);
            Route::put('/{district}', [DistrictController::class, 'update']);
            Route::delete('/{district}', [DistrictController::class, 'destroy']);
            Route::get('/{district}/upazilas', [DistrictController::class, 'upazilas']);
        });

        Route::prefix('upazilas')->group(function () {
            Route::get('/', [UpazilaController::class, 'index']);
            Route::post('/', [UpazilaController::class, 'store']);
            Route::get('/{upazila}', [UpazilaController::class, 'show']);
            Route::put('/{upazila}', [UpazilaController::class, 'update']);
            Route::delete('/{upazila}', [UpazilaController::class, 'destroy']);
            Route::get('/{upazila}/institutions', [UpazilaController::class, 'institutions']);
        });

        Route::prefix('institution-types')->group(function () {
            Route::get('/dropdown', [InstitutionTypeController::class, 'dropdown']);
            Route::get('/', [InstitutionTypeController::class, 'index']);
            Route::post('/', [InstitutionTypeController::class, 'store']);
            Route::get('/{institutionType}', [InstitutionTypeController::class, 'show']);
            Route::put('/{institutionType}', [InstitutionTypeController::class, 'update']);
            Route::delete('/{institutionType}', [InstitutionTypeController::class, 'destroy']);
        });

        Route::prefix('institutions')->group(function () {
            Route::get('/', [InstitutionController::class, 'index']);
            Route::post('/', [InstitutionController::class, 'store']);
            Route::get('/{institution}', [InstitutionController::class, 'show']);
            Route::put('/{institution}', [InstitutionController::class, 'update']);
            Route::delete('/{institution}', [InstitutionController::class, 'destroy']);
        });
    });
});
