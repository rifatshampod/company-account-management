<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class clientController extends Controller
{
    function saveData(Request $req) //function to get the input data
    {
        $req->validate([
            'name'=>'required | min:3',
            'email'=>'required',
            'phone'=>'required'  
        ]);
        
        $client = new Client;
        $client->client_name = $req->input('name');
        $client->client_id = $req->input('cid');
        $client->company = $req->input('company');
        $client->country = $req->input('country');
        $client->phone = $req->input('phone');
        $client->whatsapp = $req->input('whatsapp');
        $client->category = $req->input('category');
        $client->email = $req->input('email');
        $client->status = $req->input('status');
        $client->address = $req->input('address');
        $client->save();
        
        $req->session()->flash('status','Form submitted successfully');
        return redirect('clients');

    }

    function retrieveData(Request $req)
    {
        $clientList = Client::all();
        return view('client', ['clientlist' => $clientList]);
    }

    
}
