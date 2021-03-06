<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
         $email = $request->email;
         $pass = $request->pass;
         echo $request->path();

        $user = User::where([
            ['email', '=', $email],
            ['password', '=', $pass]
        ])->get(); 
      //  $path = $request->path();
        foreach($user as $users){
        if($users['role_id'] == 1){
            Session::put('aid', $users['id']);
            return redirect()->route('admin');
        } else if($users['role_id'] == 2){
            Session::put('cid', $users['id']);
            return redirect()->route('chief');
        } else {
            
            return redirect()->route('login');
        }
    }
        /*
        $path = $request->path();
        if($path == "login" && Session::get('aid')){
            return redirect()->route('admin');
        } else if($path != "login" && !Session::get('aid')){
            return redirect()->route('login');
        }else if($path == "login" && Session::get('cid')){
            return redirect()->route('chief');
        } else if($path != "login" && !Session::get('cid')){
            return redirect()->route('login');
        }*/
        return $next($request);
    }
}
