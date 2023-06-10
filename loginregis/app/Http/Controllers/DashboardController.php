<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {

        return view('Dashboard.index');
    }

    public function admin(){
        if(Auth::user()->role == 1){
            return view('admin');
        }else{
            return redirect()->back();
        }
    }
}
