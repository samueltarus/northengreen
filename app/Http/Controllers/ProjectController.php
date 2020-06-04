<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function water_supply(){
        return view ('water_supply');
    }
    
    public function sewage(){
        return view ('sewage');
    }
    public function construction(){
        return view ('construction');
    }
    // public function mechanical(){
    //     return view ('mechanical');
    // }
    
    
}
