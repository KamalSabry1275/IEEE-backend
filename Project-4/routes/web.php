<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Routes for login
Route::prefix("login")->group(function(){
    Route::get('/', function () {
        return view('login');
    })->name("login");
    Route::post('/', [AuthController::class,"login"]);
});
Route::get('/logout', [AuthController::class,"logout"]);

//Routes for users
Route::prefix("users")->middleware(['auth:sanctum','abilities:check-status,place-orders'])->group(function(){
    Route::get('/',[UserController::class,"index"]);
    Route::get('/create',[UserController::class,"create"]);
    Route::Post('/store',[UserController::class,"store"]);
    Route::delete('/destroy/{user}',[UserController::class,"destroy"]);
    Route::get('/edit/{user}',[UserController::class,"edit"]);
    Route::patch('/update/{user}',[UserController::class,"update"]);
});

//Routes for customers
Route::prefix("customers")->group(function(){
    Route::middleware("auth:sanctum")->group(function(){
        Route::get('/create',[CustomerController::class,"create"]);
        Route::Post('/store',[CustomerController::class,"store"]);
        Route::delete('/destroy/{customer}',[CustomerController::class,"destroy"]);
        Route::get('/edit/{customer}',[CustomerController::class,"edit"]);
        Route::patch('/update/{customer}',[CustomerController::class,"update"]);
    });

    Route::get('/',[CustomerController::class,"index"]);
    Route::get('/{customer:name}',[CustomerController::class,"show"]);
});

//Routes for invoices
Route::prefix("invoices")->group(function(){
    Route::get('/',[InvoiceController::class,"index"]);
    Route::get('/bulk',[InvoiceController::class,"show"]);

    Route::middleware("auth:sanctum")->group(function(){
        Route::get('/create',[InvoiceController::class,"create"]);
        Route::Post('/store',[InvoiceController::class,"store"]);
        Route::delete('/destroy/{invoice}',[InvoiceController::class,"destroy"]);
        Route::get('/edit/{invoice}',[InvoiceController::class,"edit"]);
        Route::patch('/update/{invoice}',[InvoiceController::class,"update"]);
    });
});