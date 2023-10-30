<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

Route::get('/', function () {
    return view('frontend.home');
});


// Frontend
Route::get('/trang-chu',[TemplateController::class, 'index']);
Route::get('/gioi-thieu',[TemplateController::class, 'introduction']);
Route::get('/dich-vu',[TemplateController::class, 'services']);
Route::get('/san-pham',[TemplateController::class, 'products']);
Route::get('/dao-tao',[TemplateController::class, 'training']);
Route::get('/du-an',[TemplateController::class, 'projects']);
Route::get('/tuyen-dung',[TemplateController::class, 'recruitment']);
Route::get('/lien-he',[TemplateController::class, 'contact']);