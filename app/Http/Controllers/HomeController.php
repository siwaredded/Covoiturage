<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */


    public function footer1()
    {
      
            return view('comment');


        }
        public function footer2()
        {
          
                return view('QuiSommesNous');
    
    
            }
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('welcome');
    }
  



    public function userdashboard()
    {

        return view('userDashboard');
    }

    public function adminHome()
    {

        return view('adminDashboard');
    }
}
