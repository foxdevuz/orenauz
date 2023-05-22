<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminLogged
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // this code provides that admin already signed in and he doesn't have to login second time until session ends
        if(session('admin_successfully_logged')){
            $admin = Admin::select('temporary_token')->first();
            $session_token = session('admin_successfully_logged');
            if($admin && $admin->temporary_token == $session_token){
                return redirect("/admin/dashboard");
            }
        }
        return $next($request);
    }
}
