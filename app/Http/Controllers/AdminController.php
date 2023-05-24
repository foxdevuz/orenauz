<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use Dotenv\Exception\ValidationException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            $image->store('public/images');
            // $image->store('images');
            Post::create([
                'name' => request('title'),
                'slug' => $slug,
                'category' =>request('category'),
                'description' => request('description'),
                'image' => $image->hashName(),
                'view' => 0
            ]);

            return redirect()->back()->with('success', 'Yangilik qo\'shildi!!!');
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return redirect()->back()->with('error', 'Nimadir xato bajarildi iltimos qayta urinib ko\'ring!!!'.$errorMessage);
        }
    }
    public function category()
    {
        return view('admin.category', ['categories'=>Category::all()]);
    }
    public function categoryAdd(Request $request)
    {
        $category = request()->validate([
            'category'=> 'required',
        ]);
        // check category if it's exists or no
        $category = Category::where('name', request('category'))->exists();
        if(!$category){
            try {
                // make slug for category
                $explode = explode(" ", request('category'));
                $slug = implode("-", $explode);
                // end making slug
                Category::create([
                    'name'=>request()->category,
                    'slug'=>$slug,
                ]);
    
                return redirect()->back()->with('success', 'Kategoriya qo\'shildi');
            } catch (\Exception $e){
                return redirect()->back()->with('error', 'Nimadir xato ketdi, '.$e->getMessage());
            }
        } else {
            return redirect()->back()->with('error', 'Kategoriya nomi allaqachon mavjud');
        }
       
    }
    public function deleteCategory($id)
    {
        // find category by id and delte post which category name equasl to this category name. Then delete category also
        $category = Category::where('id', $id)->first();
        Post::where('category',$category->name)->delete();
        Category::destroy($id);
        return redirect()->back()->with('success', "Kategoriya va unga bog'liq postlar o'chirildi!");
    }
    public function posts()
    {
        return view('admin.posts', ['posts'=>Post::orderByDesc('id')->get()]);
    }
    public function destroyPost($id)
    {
        $post = Post::where('id', $id)->first();
        $postImage = "images/" . $post->image;
        if(Storage::disk('public')->exists($postImage)){
            Storage::disk('public')->delete($postImage);
        }
        $post->delete();
        return redirect()->back()->with('success', 'Post o\'chirildi');
    }
    public function editPost($id)
    {
        $post = Post::where('id', $id)->exists();

        if($post){  
            return view('admin.edit', [
                'categories' => Category::get(), 
                'posts' => Post::find($id),
            ]);
        } else {
            return view('admin.index', [
                'categories' => Category::get(), 
            ]);
        }


        
    }
    public function update($id)
    {
        $validation = request()->validate([
            'title'=>'required',
            'description'=>'required',
            'category'=>'required',
            'media' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $post = Post::find($id);
        if ($post) {
            // Destroy old image
            $postImage = "images/" . $post->image;
            if (Storage::disk('public')->exists($postImage)) {
                Storage::disk('public')->delete($postImage);
            }
            
            // Save image
            $image = request()->file('media');
            $image->storeAs('public/images', $image->hashName());
            
            // Make slug
            $exp = explode(" ", request('title'));
            $slug = implode("-", $exp); // Result will be like: hello-world-it's-just-text
            
            // Update post
            $post->name = request('title');
            $post->description = request('description');
            $post->category = request('category');
            $post->image = $image->hashName();
            $post->slug = $slug;
            $post->save();
            
            return redirect()->back()->with('success', 'Tahrir saqlandi!!!');
        } else {
            return redirect()->back()->with('error', 'Post topilmadi');
        }

    }
}
