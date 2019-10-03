<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
        $categories = Category::where('parent_id', '=', null)->get();
        $subcategory = Category::where('parent_id', '!=', null)->get();
        view()->share('categories', $categories);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      /*  $new_products = Product::with('images','comments')->orderBy('created_at', 'desc')->limit(4)->get();
        // dd($new_products);
        
        $all_products = Product::with('images', 'comments')->limit(4)->get();
        return view('welcome', [
            'new_products' => $new_products,
            'all_products' => $all_products,
        ]);*/
        return view('welcome');
    }

    public function dangki(Request $request )
    {
     
        $data = $request->all();

        $data['role_id'] = 2;
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect()->route('home');
    }
}
