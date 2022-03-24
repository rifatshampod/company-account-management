<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Project;

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
        $client->name = $req->input('name');
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

    function clientView($client_slug)
    {
        if(Client::where('id',$client_slug)->exists())
        {
            $clients = Client::where('id',$client_slug)->first();
            $projects = $data = Project::join('clients', 'clients.id', '=', 'projects.client_id')
            // ->join('city', 'city.state_id', '=', 'state.state_id')
            ->get(['projects.id as id','projects.name as project_name','projects.budget', 'projects.advance','projects.renewal_charge','projects.next_renewal_date','projects.client_id as client_id' ])
            ->where('client_id',$client_slug);

            return view('singleClientView',compact('projects'))->with('clients',$clients);
        }
        else{

            return redirect('/')->with('status',"The link is broken");
        }
    }

    
}
