<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\View;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $linh = Product::with('category')->where('status','Active');
        // dd($linh);
        $product =  Product::with('category')->orderByDesc('name','desc')->search()->paginate(10);
        return view('backend.product.list', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() 
    {
        $category = Category::all();
        return view('backend.product.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $rules = [
        //     'name' => 'required|unique:posts|max:255|min:5',
        //     'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        //     'price' => 'required',
        //     'sale_price' => 'required',
        //     'quatity' => 'required|numeric',
        // ]; 
        // $messages = [
        //     'name.required'=>'Product name cannot be empty',
        //     'name.min' => 'Category name must be at least 5 characters',
        //     'name.max' => 'Category name cannot exceed 255 characters',
        //     'price.required'=> 'The price cannot be empty',
        //     'images.required'=> 'The image cannot be empty',
        //     'images.mimes'=> 'The image is not in the correct format',
        //     'quantity.required' => 'Product quantity cannot be empty',
        //     'quantuty.numeric' => 'Quantity must be entered as a number'
        // ];
        // $request->validated($rules,$messages);
        $file_name = time() . $request->images->getClientOriginalName();
        $request->images->move(public_path('uploads'),$file_name);
        Product::create([
            'name'=> $request->name,
            'images' => $file_name,
            'price' =>$request->price,
            'sale_price' =>$request->sale_price,
            'status' => $request->status,
            'quatity' =>$request->quatity,
            'color' =>$request->color,
            'description'=> $request->description,
            'summary' => $request->summary,
            'category_id'=> $request->category_id,
        ]);
        return redirect()->route('product.index')->with('success','Create Product Successfully');
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
        $product = Product::find($id);
        $category= Category::all(); //chỉ lấy mỗi name trong bảng category
        return view('backend.product.update', compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $file_name = $product->images;
        if($request->has('images')){
            $file_name = time() . $request->images->getClientOriginalName();
            $request->images->move(public_path('uploads'), $file_name); 
        }
        $product->update([
            'name'=> $request->name,
            'images' => $file_name,
            'price' =>$request->price,
            'sale_price' =>$request->sale_price,
            'status' => $request->status,
            'quatity' =>$request->quatity,
            'color' =>$request->color,
            'description'=> $request->description,
            'summary' => $request->summary,
            'category_id'=> $request->category_id,
        ]);
        return redirect()->route('product.index')->with('success','Update Product SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id)->delete();
        return redirect()->route('product.index')->with('success','Delete Product Successfully');
    }

    public function trashed()
    {
        $product= Product::onlyTrashed()->orderByDesc('id','desc')->paginate(10);

        return view('backend.product.trash', compact('product'));
    }

    public function restore($id){
        $product = Product::withTrashed()->find($id);

        if ($product) {
            $product->restore();
            return redirect()->back()->with('success', 'product restored successfully.');
        } else {
            return redirect()->route('product.index')->with('error', 'product not found.');
        }
    }
    public function delete($id){
        $product = Product::withTrashed()->find($id);

        if ($product) {
            $product->forceDelete();
            return redirect()->route('product.index')->with('success', 'Authoproductr restored successfully.');
        } else {
            return redirect()->back()->with('error', 'product not found.');
        }
    }
}
