<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            $password = request()->password;
            $admin = Admin::select('name','username','password','temporary_token')
                    ->where('username','=',$username)
                    ->first();
                            
            if($admin && Hash::check($password, $admin->password)){
                session(['admin_successfully_logged' => $admin->temporary_token]);
                return redirect('/admin/dashboard');
            }
            return back()->with('error','Login yoki parol xato. Iltimos qayta urunib ko\'ring');
        }

    }
    public function dashboard()
    {
        return "Hello world";
    }
}
