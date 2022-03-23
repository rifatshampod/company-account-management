<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account; 
use App\Models\Transfer; 
use App\Models\Expense; 
use App\Models\Income; 
use App\Models\Project; 
use App\Models\Project_category; 
use App\Models\Client; 

class accountController extends Controller
{
    function saveAccountData(Request $req) //function to get the input data
    {
        $req->validate([
            'name'=>'required',
            'incharge'=>'required'
        ]);
        
        $account = new Account; 
        $account->name = $req->input('name');
        $account->incharge = $req->input('incharge');
        $account->details = $req->input('details');
        $account->save();
        
        $req->session()->flash('status','New account added successfully');
        return redirect('account');

    }

    function retrieveAccountData(Request $req)
    {
        $accountList = Account::all();
        return view('account', ['accountlist' => $accountList]);
    }

    function showAccounts(Request $req)  //to show data in transfer form input field
    {
        $accountList = Account::all();
        return view('addTransfer', ['accountlist' => $accountList]);
    }

    function saveTransferData(Request $req) //function to get the input data
    {
        $req->validate([
            'from'=>'required',
            'to'=>'required',
            'amount'=>'required'
        ]);
        
        $transfer = new Transfer; 
        $transfer->account_from_id = $req->input('from');
        $transfer->account_to_name = $req->input('to');
        $transfer->amount = $req->input('amount');
        $transfer->date = $req->input('date');
        $transfer->save();
        
        $req->session()->flash('status','New transfer added successfully');
        return redirect('transfer');

    }

    function retrieveTransferData(Request $req)
    {
        $projectList = Transfer::all();
        $transferlist = Transfer::join('accounts', 'accounts.id', '=', 'transfers.account_from_id')
              		// ->join('city', 'city.state_id', '=', 'state.state_id')
              		->get();

        return view('transfer', compact('transferlist'));
        
    }

    //-------------expense---------------

    function showExpenseAccounts(Request $req)  //to show data in transfer form input field
    {
        $categoryList = Project_category::all();
        $clientList = Client::all();
        $accountList = Account::all();
        $projectList = Project::all();
        return view('addExpense', ['categorylist' => $categoryList,'clientlist' => $clientList,'accountlist' => $accountList,'projectlist' => $projectList]);
    }

    function saveExpenseData(Request $req) //function to get the input data
    {
        $req->validate([
            'name'=>'required',
            'amount'=>'required'
        ]);
        
        $expense = new Expense; 
        $expense->name = $req->input('name');
        $expense->category_id = $req->input('cat');
        $expense->project_id = $req->input('project');
        $expense->client_id = $req->input('client');
        $expense->amount = $req->input('amount');
        $expense->date = $req->input('date');
        $expense->paid_from = $req->input('account');
        //$expense->invoice = $req->input('date');
        $expense->save();
        
        $req->session()->flash('status','New expense added successfully');
        return redirect('expense');

    }

    function retrieveExpenseData(Request $req)
    {
        $allList = Expense::all();
        $expenselist = Expense::join('accounts', 'accounts.id', '=', 'expenses.paid_from')
              		->join('project_categories', 'project_categories.id', '=', 'expenses.category_id')
                    ->join('projects', 'projects.id', '=', 'expenses.project_id')
                    ->join('clients', 'clients.id', '=', 'expenses.client_id')
              		->get(['expenses.id', 'expenses.name as name', 'projects.name as project', 'clients.name as client', 'accounts.name as account', 
                      'project_categories.name as category', 'expenses.amount as amount', 'expenses.date as date', 'expenses.invoice as invoice']);

        return view('expense', compact('expenselist'));
        
    }

    //-------------income---------------

    function showIncomeAccounts(Request $req)  //to show data in transfer form input field
    {
        $categoryList = Project_category::all();
        $clientList = Client::all();
        $accountList = Account::all();
        $projectList = Project::all();
        return view('addIncome', ['categorylist' => $categoryList,'clientlist' => $clientList,'accountlist' => $accountList,'projectlist' => $projectList]);
    }

    function saveIncomeData(Request $req) //function to get the input data
    {
        $req->validate([
            'project'=>'required',
            'amount'=>'required'
        ]);
        
        $income = new Income; 
        $income->project_id = $req->input('project');
        $income->amount = $req->input('amount');
        $income->category_id = $req->input('cat');
        $income->account_id = $req->input('account');
        $income->date = $req->input('date');
        $income->expense = $req->input('expense');
        $income->save();
        
        $req->session()->flash('status','New income added successfully');
        return redirect('income');

    }

    function retrieveIncomeData(Request $req)
    {
        $allList = Income::all();
        $incomelist = Income::join('accounts', 'accounts.id', '=', 'incomes.account_id')
                    ->join('projects', 'projects.id', '=', 'incomes.project_id')
              		->get(['incomes.id', 'projects.name as project', 'accounts.name as account', 
                        'incomes.amount as amount', 'incomes.expense as expense', 'incomes.date as date']);

        return view('income', compact('incomelist'));
        
    }
}
