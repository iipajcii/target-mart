<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Action;
use App\Models\Product;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('index')
            ->with("recent",Product::recent())
        ;
    }

    public function blog(Request $request)
    {
        return view('blog');
    }

    public function search(Request $request)
    {
        return view('search');
    }

    public function products(Request $request)
    {
        return view('products');
    }

    public function product(Request $request, $id)
    {
        return view('product')->with('product',Product::findOrFail($id));
    }

    public function purchase(Request $request)
    {
        return view('purchase');
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function dashboard(Request $request)
    {
        $user = User::where('name',$request->username)->where('password',$request->password)->first();
        if(!$user){return redirect('login');}
        else{
            return view('dashboard')->with('recent',Action::recent())->with('user',$user)->with('products',Product::get());
        }
    }
}
