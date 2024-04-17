<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryConTroller;

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

// Route::get('getPost',[PostController::class, 'getPosts']);
// Route::get('getCategories',[PostController::class, 'getCategories']);
// Route::get('/chao/{user}', function($user){
//     return view('hello-user', ['user'=>$user]);
// });
// route::get('/categories')
route::get('categories.html',[CategoryConTroller::class,'getcategories']);