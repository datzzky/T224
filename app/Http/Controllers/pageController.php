<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentsData;

class pageController extends Controller
{
    public function index(){
        $data = studentsData::get();
        return view('index', compact('data'));
    }

    public function form(){
        return view('form');
    }
    
    public function editForm($id){
        $data = studentsData::where('id', '=', $id)->first();
        return view('updateForm', compact('data'));
    }
    
}


