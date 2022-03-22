<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project_category;
use App\Models\Client;

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


}
