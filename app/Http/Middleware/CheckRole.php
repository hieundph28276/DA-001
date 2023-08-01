<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // if(Auth::user()-> role == 0){
        //     return redirect()->route('index');
        //     // dd('Bạn không được phép truy cập');
        // }
        // return $next($request);
        if(Auth::check() && Auth::user()->role == $role){
            return $next($request);
        }

        return redirect()->route('login')->with('error', 'Bạn phải đăng nhập bằng tài khoản quản trị viên');
    }
}
