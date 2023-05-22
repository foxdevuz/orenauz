<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use Illuminate\Support\Str;

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

        return view('admin.index', [
            'categories'=>Category::get(), 
            'posts'=>Post::get()
            ]
        );
    }
    public function addNews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'media' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);
        

        try {
            #make slug
            $exp = explode(" ", request('title'));
            $slug = implode("-",$exp); // result be like: hello-world-it's-just-text
            #making slug finished
            $image = $request->file('media');
            $uniqueImageName = Str::random(15) . "." . $image->getClientOriginalExtension();
            $image->storeAs('images', $uniqueImageName);
            Post::create([
                'name' => request('title'),
                'slug' => $slug,
                'category' =>request('category'),
                'description' => request('description'),
                'image' => $uniqueImageName,
                'view' => 0
            ]);

            return redirect()->back()->with('success', 'Yangilik qo\'shildi!!!');
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return redirect()->back()->with('error', 'Nimadir xato bajarildi iltimos qayta urinib ko\'ring!!!'.$errorMessage);
        }
    }
}
