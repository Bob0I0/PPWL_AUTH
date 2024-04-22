<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() //type 0 == User
    {
        return view('home');
    }
    
    public function superadminHome(){ //type 1 == Superadmin
        return view("superadminHome");
    } 

    public function adminHome(){ 
        return view('adminHome');
    }
    
    public function dosenHome(){ 
        return view('dosenHome');
    }
    
    public function mahasiswaHome(){ 
        return view('mahasiswaHome');
    }
    
    public function tendikHome(){ 
        return view('tendikHome');
    }
    
    public function akademikHome(){ 
        return view('akademikHome');
    }
    
    public function keuanganHome(){ 
        return view('keuanganHome');
    }
    
    public function direkturHome(){ 
        return view('direkturHome');
    }
    
    public function wd1Home(){ 
        return view('wd1Home');
    }
    
    public function wd2Home(){ 
        return view('wd2Home');
    }
    
    public function wd3Home(){ 
        return view('wd3Home');
    }
    
    public function lppmHome(){ 
        return view('lppmHome');
    }
    
    public function sdmHome(){ 
        return view('sdmHome');
    }

}
