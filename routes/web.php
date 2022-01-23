<?php

use App\Http\Controllers\BasicUser;
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

Route::get('/', function(){
    return view('home');
});

Route::post('basicuserinput', [BasicUser::class, 'userInsert']);

Route::post('basicuserdelete', [BasicUser::class, 'deleteuser']);

// show all

Route::get('/getuser', [BasicUser::class, 'getUser']);


Route::post('/updatebasicuser', [BasicUser::class, 'updateUser']);