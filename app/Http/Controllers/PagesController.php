<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view ('pages.index');
    }
    
    public function about(){
        return view ('pages.about');
    }
    public function teams(){
        return view ('pages.teams');
    }
    public function services(){
        return view ('pages.services');
    }
    public function projects(){
        return view ('pages.projects');
    }
    public function jobs(){
        return view ('pages.jobs');
    }
    public function mechanical(){
        return view ('mechanical');
    }
    
}
