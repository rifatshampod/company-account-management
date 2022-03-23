<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\projectController;

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
    return view('dashboard');
});

//-------------Static view Routes

Route::view('dashboard','dashboard');
//Route::view('clients','client');
Route::view('create-client','addClient');
// Route::view('projects','project');
//Route::view('create-project','addProject');
//Route::view('project-category','projectCategory');
Route::view('account','account');
Route::view('add-account','addAccount');
Route::view('income','income');
Route::view('add-income','addIncome');
Route::view('expense','expense');
Route::view('add-expense','addExpense');
Route::view('transfer','transfer');
Route::view('add-transfer','addTransfer');
Route::view('user','user');
Route::view('profile','profile');
Route::view('login','signIn');
Route::view('forget','forgetPassword');

//-------------Static view Routes

Route::post("addClient", [clientController::class, 'saveData']);
Route::get("clients", [clientController::class, 'retrieveData']);
Route::post("add-category", [projectController::class, 'saveCategoryData']);
Route::get("project-category", [projectController::class, 'retrieveCategoryData']);
Route::get("create-project", [projectController::class, 'showCategoryData']);
Route::post("add-project", [projectController::class, 'saveProjectData']);
Route::get("projects", [projectController::class, 'retrieveProjectData']);

