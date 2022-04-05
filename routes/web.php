<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\accountController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\invoiceController;

//-------------- disabling register for new users ----------------------------------------------------------------------------------------------
Auth::routes(['register' => false]);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['web', 'auth']], function(){

    //-------------Static view Routes


Route::view('create-client','addClient');
Route::view('add-account','addAccount');
Route::view('user','user');
Route::view('profile','profile');
Route::view('signin','signIn');
Route::view('forget','forgetPassword');
Route::view('single-client','singleClientView');
Route::view('single-project','singleProjectView');

//-------------Static view Routes
    
    //-------------- controller routes----------------------------------------------------------------------------------------------

//dashboard
Route::get("/", [dashboardController::class, 'dataCount']);  //show all data counts in dashboard
Route::get("dashboard", [dashboardController::class, 'dataCount']);

//client
Route::post("addClient", [clientController::class, 'saveData']); // add client to database
Route::get("clients", [clientController::class, 'retrieveData']);  //show all clients in client page

//project category
Route::post("add-category", [projectController::class, 'saveCategoryData']); // add project category to database
Route::get("project-category", [projectController::class, 'retrieveCategoryData']); //show all category to category page

//project
Route::get("create-project", [projectController::class, 'showCategoryData']); //show dynamic category and client fin form input field
Route::post("add-project", [projectController::class, 'saveProjectData']); //add project to database
Route::get("projects", [projectController::class, 'retrieveProjectData']);  // show all projects in project page

//account
Route::post("addAccount", [accountController::class, 'saveAccountData']); // add account to database
Route::get("account", [accountController::class, 'retrieveAccountData']);  //show all accounts in account page

//transfer
Route::get('add-transfer',[accountController::class, 'showAccounts']); //show dynamic accounts in input field
Route::post("addTransfer", [accountController::class, 'saveTransferData']); // add client to database
Route::get("transfer", [accountController::class, 'retrieveTransferData']);  //show all clients in client page

//expenses
Route::get('add-expense',[accountController::class, 'showExpenseAccounts']); //show dynamic accounts in input field
Route::post("addExpense", [accountController::class, 'saveExpenseData']); // add client to database
Route::get("expense", [accountController::class, 'retrieveExpenseData']);  //show all clients in client page

//incomes
Route::get('add-income',[accountController::class, 'showIncomeAccounts']); //show dynamic accounts in input field
Route::post("addIncome", [accountController::class, 'saveIncomeData']); // add client to database
Route::get("income", [accountController::class, 'retrieveIncomeData']);  //show all clients in client page

//single client
Route::get('single-client={client_slug}', [clientController::class, 'clientView']);

//single project
Route::get('single-project={project_slug}', [projectController::class, 'projectView']);

//invoice
Route::get('invoice', [invoiceController::class, 'invoice']);

});
