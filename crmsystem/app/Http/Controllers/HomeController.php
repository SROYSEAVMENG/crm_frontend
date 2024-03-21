<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class HomeController extends Controller
{
    public function lead(){
        return view('lead');
    }
    public function customer(){
        return view('customer');
    }
    // public function staff(){
    //     return view('staff');
    // }
    public function ticket(){
        return view('ticket');
    }
    public function atm(){
        return view('atm');
    }
    public function sale(){
        return view('sale');
    }
    public function home(){
        return View('home');
    }
    public function technical(){
        return View('technical');
    }
    public function listreport(){
        return View('listreport');
    }





    


}
