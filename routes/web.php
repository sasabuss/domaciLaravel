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

Route::post("/admin/add-product",[ShopController::class,"addProduct"]);
Route::get("/admin/all-products",[\App\Http\Controllers\ProductsControler::class,"index"]);
Route::get("admin/delete-product/{product}",[\App\Http\Controllers\ProductsControler::class,"delete"]);
Route::get("/admin/all-contacts",[ContactController::class,'getAllContacts']);
Route::get("/admin/delete-contact/{contact}",[ContactController::class,'delete']);
