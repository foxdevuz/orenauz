<?php

namespace App\Http\Controllers;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
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
            'login'=>['required'],
            'password'=>['required']
        ]);

        if(auth()->attempt($atributes)){
            redirect('admin/dashboard/')->with('welcome', "Salom admin, admin panelga xush kelibsiz");
        }

        redirect()->back()->withErrors(['login'=>"Login yoki parol xato!",'password'=>"Login yoki parol xato!",]);
    }
}
