<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account; 

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
}
