<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function welcome(){
        return view("welcome");
    }
    public function about(){
        return view("about");
    }
    public function ifDemo(){
        return view("ifDemo");
    }
    public function loopDemo(){
        return view("loopDemo");
    }
    public function switchDemo(){
        return view("switchDemo");
    }
    public function correct(){
        return view("CorrectAnswer");
    }
    public function wrong(){
        return view("WrongAnswer");
    }
}
