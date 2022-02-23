<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('/rpl4',[BlogController::class, 'home']);
route::get('/rpl4/tentang',[BlogController::class, 'tentang']);
route::get('/rpl4/kontak',[BlogController::class, 'kontak']);
