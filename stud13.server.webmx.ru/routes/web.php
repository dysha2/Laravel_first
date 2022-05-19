<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
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

Route::get('/', [MainController::class, "acMain"]);

Route::get('/news', [MainController::class, "acNews"]);

Route::get('/hubs', [MainController::class, "acHubs"]);

Route::get('/post/{postid}',[MainController::class, "acPost"]);

Route::get('/user/{userid}',[MainController::class, "acUser"]);

Route::get('/user/{userid}/posts',[MainController::class, "acUserPosts"]);

Route::get('/hub/{hubid}',[MainController::class, "acHub"]);

Route::get('/users', [MainController::class, "acUsers"]);





Route::get('/console', [AdminController::class, "acConsoleMenu"]);

/*users*/
Route::get('/console/users', [AdminController::class, "acConsoleUsers"]);

Route::get('/console/userupdate/{userid}', [AdminController::class, "acConsoleUserUpdate"]);

Route::get('/console/userdelete/{userid}', [AdminController::class, "acConsoleUserDelete"]);

Route::post('/console/usermodification', [AdminController::class, "acConsoleUserModification"]);

Route::get('/console/useradd', [AdminController::class, "acConsoleUserAdd"]);
/*---*/


/*POSTS*/
Route::get('/console/posts', [AdminController::class, "acConsolePosts"]);

Route::get('/console/postupdate/{postid}', [AdminController::class, "acConsolePostUpdate"]);

Route::get('/console/postdelete/{postid}', [AdminController::class, "acConsolePostDelete"]);

Route::post('/console/postmodification', [AdminController::class, "acConsolePostModification"]);

Route::get('/console/postadd', [AdminController::class, "acConsolePostAdd"]);
/*---*/


/*HUBS*/
Route::get('/console/hubs', [AdminController::class, "acConsoleHubs"]);

Route::get('/console/hubupdate/{hubid}', [AdminController::class, "acConsoleHubUpdate"]);

Route::get('/console/hubdelete/{hubid}', [AdminController::class, "acConsoleHubDelete"]);

Route::post('/console/hubmodification', [AdminController::class, "acConsoleHubModification"]);

Route::get('/console/hubadd', [AdminController::class, "acConsoleHubAdd"]);
/*---*/