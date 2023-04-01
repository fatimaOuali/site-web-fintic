<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Product_images;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $viewData = [];
        $viewData['category'] = "";
        $viewData["categories"] = Category::all();
        $viewData["title"] = "Products - FINTIC";
        // $viewData["product_imag"] = Product_images::all();
        $viewData["products"] = Product::with('productImages')->orderBy('created_at', 'DESC')->get();
        return view('product.index')->with("viewData", $viewData);
    }

    public function search(Request $request){
        $viewData["title"] = "Products - FINTIC";
        if($request->search){
 $viewData["searchProducts"] = Product::where('name','LIKE','%'.$request->search.'%')->latest()->paginate(15);
       return view('search.search')->with("viewData", $viewData);
}else{
         return redirect()->back()->with('message', 'Empty search');
        }
    }
    
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->getName()." - FINTIC";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
  

    public function showByCategory($categoryId)
    {
        $viewData["products"] = Product::where('category_id', $categoryId)->get();
        $viewData["categories"] = Category::all();
        $viewData["title"] = "Products - FINTIC";
    
        return view('product.index')->with("viewData", $viewData);
    }
}
