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
            ->with("popular",Product::popular())
        ;
    }

    public function blog(Request $request)
    {
        return view('blog');
    }

    public function search(Request $request)
    {
        return view('search')->with('search',$request->s)->with('products',Product::search($request->s));
    }

    public function products(Request $request)
    {
        return view('products');
    }

    public function product(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->unique_views++;
        $product->save();
        return view('product')
            ->with('product',$product)
            ->with('related',Product::related($id))
        ;
    }

    public function purchase(Request $request, $id)
    {
        return view('purchase')
           ->with('product',Product::findOrFail($id))
        ;
    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function signup(Request $request)
    {
        return view('signup');
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
