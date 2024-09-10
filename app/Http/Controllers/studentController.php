<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function index(){
        $students = DB::table('students')->get();
        // dd($students);
        return view('welcome', ['students' => $students]);
    }
}
