<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function blog(Request $request)
    {
        return view('blog');
    }

    public function search(Request $request)
    {
        return view('search');
    }

    public function product(Request $request)
    {
        return view('product');
    }

    public function purchase(Request $request)
    {
        return view('purchase');
    }
}
