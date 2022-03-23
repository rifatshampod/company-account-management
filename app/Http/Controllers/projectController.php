<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_category;
use App\Models\Client;
use App\Models\Project;

class projectController extends Controller
{
    function saveCategoryData(Request $req) //function to get the input data
    {
        $req->validate([
            'name'=>'required' 
        ]);
        
        $category = new Project_category;
        $category->name = $req->input('name');
        $category->save();
        
        $req->session()->flash('status','Form submitted successfully');
        return redirect('project-category');

    }

    function retrieveCategoryData(Request $req)
    {
        $categoryList = Project_category::all();
        return view('projectCategory', ['categorylist' => $categoryList]);
    }

    function showCategoryData(Request $req)
    {
        $categoryList = Project_category::all();
        $clientList = Client::all();
        return view('addProject', ['categorylist' => $categoryList,'clientlist' => $clientList]);
    }

    function saveProjectData(Request $req) //function to get the input data
    {
        $req->validate([
            'name'=>'required | min:3',
            'client'=>'required',
            'renewal'=>'required'  
        ]);
        
        $project = new Project;
        $project->name = $req->input('name');
        $project->client_id = $req->input('client');
        $project->category_id = $req->input('category');
        $project->budget = $req->input('budget');
        $project->advance = $req->input('advance');
        $project->status = $req->input('status');
        $project->start_date = $req->input('start_date');
        $project->due_date = $req->input('due_date');
        $project->renewal = $req->input('renewal');
        $project->renewal_charge = $req->input('renewal_charge');
        $project->next_renewal_date = $req->input('renewal_date');
        $project->save();
        
        $req->session()->flash('status','New project added successfully');
        return redirect('projects');

    }

    function retrieveProjectData(Request $req) //due 
    {
        $projectList = Project::all();
        $data = Project::join('clients', 'clients.id', '=', 'projects.client_id')
              		// ->join('city', 'city.state_id', '=', 'state.state_id')
              		->get(['projects.id','projects.name as name', 'clients.name as client_name','projects.renewal as renewal','projects.next_renewal_date as renewal_date', 'projects.status as status']);

        return view('project', compact('data'));
    }


}
