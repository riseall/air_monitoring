<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

    public function home()
    {
        return view('welcome');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
}
