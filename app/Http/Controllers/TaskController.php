<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(){
        $view_data = [];
        $view_data['tasks'] = DB::table('task')->get();
        return view('task.index', $view_data);
    }
}
