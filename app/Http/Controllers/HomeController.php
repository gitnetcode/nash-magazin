<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index() {
        $products = Product::all();
        // foreach($products as $product){
        //     echo 'Title'. $product->title;
        //     echo "<br>";
        // }
        return view('home.index');
    }
}


// gapirolmayman faqat 