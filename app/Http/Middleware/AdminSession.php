<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session('admin_successfully_logged')){
            $admin = Admin::select('temporary_token')->first();
            $session_token = session('admin_successfully_logged');
            if($admin && $admin->temporary_token !== $session_token){
                return redirect("/admin");
            }
        } else {
            return redirect("/admin");
        }
        return $next($request);
    }
}
