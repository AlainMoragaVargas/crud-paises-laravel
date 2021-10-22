<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CountryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/countries')->group(function() {
    Route::GET('/list', [ CountryController::class, 'index' ]);
    Route::GET('/delete-country/{id}', [ CountryController::class, 'destroy' ]);
    Route::POST('/create-country', [ CountryController::class, 'store' ]);
    Route::GET('/edit-country/{id}', [ CountryController::class, 'edit' ]);
    Route::POST('/update-country', [ CountryController::class, 'update' ]);
});

