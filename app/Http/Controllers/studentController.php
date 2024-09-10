<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller
{
    public function index(){
        $students = DB::table('students')
        ->orderBy('name')
        ->get();
        // dd($students);
        return view('welcome', ['students' => $students]);
    }

    public function singleStudent(string $id){
        $students = DB::table('students')
        ->where('id', $id)
        ->get();
        return view('studentView', ['students' => $students]);
    }

    public function deleteStudent(string $id){
        $students = DB::table('students')
        ->where('id', $id)
        ->delete();
        return redirect()->route('home');
    }
}
