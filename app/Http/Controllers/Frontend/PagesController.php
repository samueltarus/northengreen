<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function frontend_index(){
        return view('frontend.frontend_index');
    }
    public function frontend_services(){
        return view('frontend.frontend_services');
    }
    public function frontend_about(){
        return view('frontend.frontend_about');
    }
    public function frontend_portfolio(){
        return view('frontend.frontend_portfolio');
    }
    public function frontend_pricing(){
        return view('frontend.frontend_pricing');
    }
    public function frontend_blog(){
        return view('frontend.frontend_blog');
    }
    public function frontend_contact(){
        return view('frontend.frontend_contact');
    }
    public function frontend_team(){
        return view('frontend.frontend_team');
    }
    public function frontend_testimonials(){
        return view('frontend.frontend_testimonials');
    }

    public function frontend_projects(){
        return view('frontend.frontend_projects');
    }
}
