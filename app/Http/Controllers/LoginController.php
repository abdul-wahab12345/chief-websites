<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Meal;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\AdminMiddleware;

class LoginController extends Controller
{

    public function getdata_callback(Request $req){
        Session::flash('error', 'Email Or Password is not correct');
        return redirect()->route('login');
    }

    public function logout_callback(Request $req){
        $req->session()->flush();
        return redirect()->route('login');

    }
    
    
}
