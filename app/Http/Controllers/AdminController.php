<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function login()
    {
        $atributes = request()->validate([
            'username'=>['required'],
            'password'=>['required']
        ]);
        // look for admin 
        if(count($atributes)>1){
            $username = request()->username;
            $pass = request()->password;
            $admin = DB::table('admins')
                            ->select('name','password','username','temporary_teken')
                            ->where('username','=',$username)
                            ->where('password', '=', $pass)->exists();
                            
            if($admin){
                return redirect('/admin/dashboard');
            }
            return redirect()->back()->withErrors(['username'=>"Login yoki parol xato!",'password'=>"Login yoki parol xato!",]);
        }

    }
}
