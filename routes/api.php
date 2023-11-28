<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('contacts', ContactController::class);
Route::get('contacts', [ContactController::class, 'index']);
Route::post('contacts', [ContactController::class, 'store']);
Route::get('contacts/{id}', [ContactController::class, 'show']);
Route::get('contacts/{id}/edit', [ContactController::class, 'edit']);
Route::put('contacts/{id}/edit', [ContactController::class, 'update']);
Route::delete('contacts/{id}/delete', [ContactController::class, 'destroy']);