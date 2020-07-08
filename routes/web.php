<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', 'PagesController@index');

// Route::get('/home', function(){
//     return view('index');
// });

Route::get('/dashboard', 'PagesController@dashboard');

Route::resource('user', 'UserController');

// this controller will display all resources in TasksController.php
// Each resource is a function and can return a view
Route::resource('/tasks', 'TasksController'); //this routes to localhost/tasks and uses the TasksController index method

// Route::get('/taskview', function(){
//     return view ('task.taskview');
// });

// Route::resource('/taskview', 'TaskViewController');

Route::get('/tasks/{id}/destroy', 'TasksController@destroy');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
