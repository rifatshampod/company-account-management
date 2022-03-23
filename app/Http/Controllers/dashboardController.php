<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    function dataCount()
    {
        $client= DB::table('clients')->count('id');
        $project= DB::table('projects')->count('id');
        $income= DB::table('incomes')->sum('amount');
        $expense= DB::table('expenses')->sum('amount');

        return view("dashboard",compact('client','project','income','expense'));
    }
}
