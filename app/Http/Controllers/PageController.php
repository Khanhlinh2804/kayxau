<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Skill;
use App\Models\Blog;
use App\Models\Comment;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public $orderBy = "Default Sorting";
    public function index()
    {
        $blog = Blog::with('skill')->orderBy('id','DESC')->limit(1)->get();
        $blogs = Blog::with('skill')->orderBy('id','DESC')->limit(1)->get();
        $category = Category::orderBy('id','DESC')->limit(4)->get();
        $product = Product::orderBy('id','DESC')->limit(4)->get();
        return view('frontend.pages.home',compact('category','product','blog','blogs'));
    }
    // public function changeSize($size){
    //     $this->size = $size;
    // }
    public function changeOrderBy($order)
    {
        $this->orderBy = $order;
    }

    public function shop(){
        
        $product = Product::orderBy('id','desc')->search()->paginate(6);
        $total_product = Product::count();
        $blog = Blog::inRandomOrder()->limit(2)->get();
        $categories = Category::orderBy('name','asc')->get();
        return view('frontend.pages.shop', compact('blog','total_product','product','categories'));
    }
    public function category($id){
        $total_product = Product::count();
        $category = Category::where('id', $id)->first();
        $category_id = $category->id;
        $category_name = $category->name;
        $products = Product::where('category_id',$category_id)->orderBy('id','asc')->search()->paginate(6);
        $blog = Blog::inRandomOrder()->limit(2)->get();
        $categories = Category::orderBy('name','asc')->get();
        return view('frontend.pages.category', compact('blog','total_product','categories','products'));
    }
    public function about() 
    {
        return view('frontend.pages.about');  
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
    public function blog(){
        $skill = Skill::all();
        $blog = Blog::orderBy('id','desc')->where('size','1')->inRandomOrder()->limit(2)->get();
        $blogs = Blog::orderBy('id','desc')->where('size','2')->inRandomOrder()->limit(2)->get();
        return view('frontend.pages.blog',compact('blog','blogs','skill'));
    }
    public function blog_detail($id){
        $comment = Comment::inRandomOrder()->limit(3)->get();
        $blog = Blog::find($id);
        $skill = Skill::all();
        return view('frontend.pages.blog-detail', compact('blog','skill','comment'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
