<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomePageController;


Route::view('/about',"about");


Route::get("/contact",[ContactController::class,'index']);
Route::get("/shop",[ShopController::class,'index']);
Route::get("/",[HomePageController::class,'index']);


Route::get("/admin/all-contacts",[ContactController::class,'getAllContacts']);
Route::post("/send-contact",[ContactController::class,"sendContact"]);