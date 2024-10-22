<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontendController::class, 'welcome']);
Route::get('/laptop', [FrontendController::class, 'laptop'])->name('laptop');
Route::get('/show-product/{id}', [FrontendController::class, 'showProduct']);

Route::get('/computer', [FrontendController::class, 'computer'])->name('computer');
Route::get('/phone', [FrontendController::class, 'phone'])->name('phone');


Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    //------------------Laptop------------------------------------
    Route::get('/addproduct', [ProductController::class, 'addproduct']);
    Route::get('/allproduct', [ProductController::class, 'allproduct']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::get('editproduct/{id}', [ProductController::class, 'editproduct']);
    Route::put('update/{id}', [ProductController::class, 'updatep']);
    Route::delete('deleteproduct/{id}', [ProductController::class, 'deleteproduct']);
    
    //------------------Computer------------------------------------
    Route::get('/createproduct', [ComputerController::class, 'createproduct']);
    Route::get('/allcomputer', [ComputerController::class, 'allcomputer']);
    Route::post('storeproduct', [ComputerController::class, 'storeproduct']);
    Route::get('computeredit/{id}', [ComputerController::class, 'computeredit']);
    Route::put('updatecomproduct/{id}', [ComputerController::class, 'updatecomproduct']);
    Route::delete('deletecomputer/{id}', [ComputerController::class, 'deletecomputer']);

    //------------------Phone------------------------------------
    Route::get('/addphone', [PhoneController::class, 'addphone']);
    Route::get('/allphone', [PhoneController::class, 'allphone']);
    Route::post('storephone', [PhoneController::class, 'storephone']);
    Route::get('editphone/{id}', [PhoneController::class, 'editphone']);
    Route::put('updatephone/{id}', [PhoneController::class, 'updatephone']);
    Route::delete('deletephone/{id}', [PhoneController::class, 'deletephone']);

    
});

require __DIR__.'/auth.php';
