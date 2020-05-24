<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){
        return view ('home');
    }
    
    public function about(){
        return view ('about');
    }
    public function teams(){
        return view ('teams');
    }
    public function services(){
        return view ('services');
    }
    public function projects(){
        return view ('projects');
    }
    public function jobs(){
        return view ('jobs');
    }
    
    
}

