<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/', function() { return view('tasks.index'); })->name('tasks.showIndex');
//Route::get('/categories/create', function() { return view('categories.create'); })->name('categories.showCreate');
//Route::get('/categories/{id}/edit', function() { return view('categories.edit'); })->name('categories.showEdit');
//
//Route::post('/categories/create', function() { echo "カテゴリー作成"; })->name('categories.create');
//Route::post('/categories/{id}/update', function($id) { echo "カテゴリー更新 (id: {$id})"; })->name('categories.update');
//Route::post('/categories/{id}/delete', function($id) { echo "カテゴリー削除 (id: {$id})"; })->name('categories.delete');
//
//Route::get('/categories/{id}/tasks/create', function() { return view('tasks.create'); })->name('tasks.showCreate');
//Route::get('/tasks/{id}/edit', function() { return view('tasks.edit'); })->name('tasks.showEdit');
//
//Route::post('/categories/{id}/tasks/create', function() { echo "タスク作成"; })->name('tasks.create');
//Route::post('/tasks/{id}/update', function($id) { echo "タスク更新 (id: {$id})"; })->name('tasks.update');
//Route::post('/tasks/{id}/delete', function($id) { echo "タスク削除 (id: {$id})"; })->name('tasks.delete');


Route::group(['middleware' => ['auth']], function() {
    Route::get('/', 'TaskController@showIndexView')->name('tasks.showIndex');
    Route::get('/categories/create', 'CategoryController@showCreateView')->name('categories.showCreate');
    Route::get('/categories/{id}/edit', 'CategoryController@showEditView')->name('categories.showEdit');
    Route::post('/categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('/categories/{id}/update', 'CategoryController@update')->name('categories.update');
    Route::post('/categories/{id}/delete', 'CategoryController@delete')->name('categories.delete');
    Route::get('/categories/{id}/tasks/create', 'TaskController@showCreateView')->name('tasks.showCreate');
    Route::get('/tasks/{id}/edit', 'TaskController@showEditView')->name('tasks.showEdit');
    Route::post('/categories/{id}/tasks/create', 'TaskController@create')->name('tasks.create');
    Route::post('/tasks/{id}/update', 'TaskController@update')->name('tasks.update');
    Route::post('/tasks/{id}/delete', 'TaskController@delete')->name('tasks.delete');
});

// 一旦こうする
//Route::get('/login', function() {return view('auth.login');})->name('auth.showLogin');
//Route::post('/login', function() {echo "Login";})->name('auth.login');
//Route::post('/logout', function() {echo "Logout";})->name('auth.logout');
//Route::get('/register', function() {return view('auth.register');})->name('auth.showRegister');
//Route::post('/register', function() {echo "Register";})->name('auth.register');

// 次にこうする

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', 'AuthController@showLoginForm')->name('auth.showLogin');
});

Route::post('/login', 'AuthController@login')->name('auth.login');
Route::post('/logout', 'AuthController@logout')->name('auth.logout');
Route::get('/register', 'UserController@showRegistrationForm')->name('auth.showRegister');
Route::post('/register', 'UserController@register')->name('auth.register');




