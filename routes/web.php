<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', [PortfolioController::class, "index"])->name("home.page");
Route::get('/about-me', [PortfolioController::class, "about"])->name("about.me");
Route::get('/project', [PortfolioController::class, "project"])->name("project");
Route::get('/contact', [PortfolioController::class, "contact"])->name("contact.me");
//Route::get("/",[PortfolioController::class, "index"]);