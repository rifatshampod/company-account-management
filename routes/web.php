<?php

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
    return view('home');
});

//-------------Static view Routes

Route::view('login','login');
Route::view('dashboard','dashboard');
Route::view('clients','client');
Route::view('create-client','addClient');
Route::view('projects','project');
Route::view('create-project','addProject');
Route::view('project-category','projectCategory');
Route::view('account','account');
Route::view('add-account','addAccount');
Route::view('income','income');
Route::view('add-income','addIncome');
Route::view('expense','expense');
Route::view('add-expense','addExpense');
Route::view('transfer','transfer');
Route::view('add-transfer','addTransfer');

//-------------Static view Routes