<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function indexpagee()
    {
       
        return view('layouts.Backend');
    }
}
