<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class Front extends Controller
{
    var $brands;
    var $categories;
    var $products;
    var $title;
    var $description;

    public function __construct()
    {
        $this->brands = Brand::all(array('name'));
        $this->categories=Category::all(array('name'));
        $this->products=Product::all(array('id','name','price'));
    }

    public function index(){
        return view('home', array('title'=> 'Welcome','page'=>'home', 'description'=>'' , 'brands'=>$this->brands, 'categories'=>$this->categories, 'products'=>$this->products));
    }
    public function products(){
        return view('products', array( 'title'=>'Products Listing', 'page'=>'products', 'description'=>'' , 'brands'=>$this->brands, 'categories'=>$this->categories, 'products'=>$this->products));
    }
    public function product_details($id){
        $product = Product::find($id);
        return view('product_details', array( 'products'=>$product, 'title'=>$product->name, 'page'=>'products', 'description'=>'' , 'brands'=>$this->brands, 'categories'=>$this->categories, 'products'=>$this->products));
    }
    public function product_categories($name){
        return view('products', array('page'=>'products', 'title'=>'Welcome', 'description'=>'' , 'brands'=>$this->brands, 'categories'=>$this->categories, 'products'=>$this->products));
    }
    public function product_brand($name, $category=null){
        return view('products', array('page'=>'products', 'title'=>'Welcome', 'description'=>'' , 'brands'=>$this->brands, 'categories'=>$this->categories, 'products'=>$this->products));
    }
    public function blog(){
        return view('blog', array('page'=>'blog','title'=>'Welcome', 'description'=>'' , 'brands'=>$this->brands, 'categories'=>$this->categories, 'products'=>$this->products));
    }
    public function blog_post($id){
        return view('blog_post', array('page'=>'blog', 'title'=>'Welcome', 'description'=>'' , 'brands'=>$this->brands, 'categories'=>$this->categories, 'products'=>$this->products));
    }
    public function contact_us(){
        return view('contact_us', array('page'=>'contact_us', 'title'=>'Welcome', 'description'=>''));
    }
    public function login(){
        return view('login', array('page'=>'home', 'title'=>'Welcome', 'description'=>''));
    }
    public function logout(){
        return view('logout', array('page'=>'home', 'title'=>'Welcome', 'description'=>''));
    }
    public function cart(){
        return view('cart', array('page'=>'home', 'title'=>'Welcome', 'description'=>''));
    }

    public function checkout(){
        return view('checkout', array('page'=>'home','title'=>'Welcome', 'description'=>''));
    }
    public function search($query){
        return view('products', array('page'=>'products', 'title'=>'Welcome', 'description'=>''));
    }

}
