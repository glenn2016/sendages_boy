<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view("template.index");
    }

    public function contact(){
        return view("template.contact");
    }

    public function about(){
        return view("template.about");
    }

    public function service(){
        return view("template.service");
    }
    
    
}
