<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function admin_callback(){
        $user = User::all();
        return view('admin', ['users'=>$user]);
    }
    public function add_user_callback(){
        $role = Role::all();
        $user = User::all();
        return view('add_user', ['roles'=>$role, 'users'=>$user]);
    }
    public function add_new_user(Request $req){
        DB::insert('insert into users (role_id, name, email, password, city) values (?, ?, ?, ?, ?)',
        [$req->role, $req->uname, $req->email, $req->pass, $req->city]);
        return redirect()->route('admin');
    }
    public function delete_user_callback(User $user){
        $user->delete();
        return back();
    }
}
