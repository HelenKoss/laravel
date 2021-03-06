<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class MainController extends Controller
{
    public function index()
        {
            return view('index');
        }

    public function categories()
        {
            $categories=Category::get();
            return view('categories', ['categories'=>$categories]);
        }

        
    public function product($category, $product=null)
        {
            return view('product',['product'=>$product]);
        }

    public function category($code)
        {
            $category=Category::where('code',$code)->first();
            return view('category', ['category'=>$category]);
        }

        public function basket()
        {
            return view('basket');
        }
        

        public function basketPlace()
        {
            return view('order');
        }
}
