<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //show registration form
    public function showRegistrationForm(){
        return view('admin.register');

    }




    //show login form
    public function showLoginForm(){

        return view('admin.login');
    }


    
    //show dashboard form
    public function showDashboard(){

        return view('admin.dashboard');
    }

    
}
