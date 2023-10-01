<?php

use App\Http\Controllers\Api\CastMemberController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\VideoController;
use Illuminate\Support\Facades\Route;

Route::apiResource('/categories', CategoryController::class);
Route::apiResource('/videos', VideoController::class);
Route::apiResource(
    name: '/genres',
    controller: GenreController::class
);

Route::apiResource(
    name: '/cast_members',
    controller: CastMemberController::class
);

Route::get('/', function () {
    return response()->json(['message' => 'success']);
});
