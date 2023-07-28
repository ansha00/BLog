<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[BlogController::class, "blog"]);
Route::post("/save",[BlogController::class, "save"]);
Route::get("/delete/{id}",[BlogController::class, "delete"]);
Route::get("/edit/{id}",[BlogController::class, "edit"]);
Route::post("/update/{id}",[BlogController::class, "update"]);