<?php

use App\Http\Controllers\DocumentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('v1/documents', [DocumentsController::class,'index'])->name('document.list');
Route::get('v1/document/{id}', [DocumentsController::class,'show'])->name('document.show');
Route::post('v1/documents/create', [DocumentsController::class,'store'])->name('document.store');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

