<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Project_category;
use App\Models\Client;
use App\Models\Project;

class dashboardController extends Controller
{
    function dataCount()
    {
        $client= DB::table('clients')->count('id');
        $project= DB::table('projects')->count('id');
        $income= DB::table('incomes')->sum('amount');
        $expense= DB::table('expenses')->sum('amount');

        //$projectList = Project::paginate(5);
        $data = Project::join('clients', 'clients.id', '=', 'projects.client_id')
              		// ->join('city', 'city.state_id', '=', 'state.state_id')
              		// ->get(['projects.id','projects.name as name', 'clients.name as client_name','projects.renewal as renewal','projects.next_renewal_date as renewal_date', 'projects.status as status'])
                    ->paginate(5, array('projects.id','projects.name as name', 'clients.name as client_name','projects.renewal as renewal','projects.next_renewal_date as renewal_date', 'projects.status as status'));


        return view("dashboard",compact('client','project','income','expense', 'data'));
    }

}
