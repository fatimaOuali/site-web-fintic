<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["favoris"] = Wishlist::where('user_id', Auth::id())->get();
        // $viewData["products"] = Product::findOrFail(Auth::user()->id);
        return view('wishlist.index')->with("viewData", $viewData);
    }

    public function add(Request $request)
    {
 
        // $viewData = [];
        // $viewData["product"]= Product::all();
        if(Auth::check())
        {
            $product_id = $request->input('product_id');
            if(Product::find($product_id)){
                $wish = new Wishlist();
                $wish->product_id=$product_id;
                $wish->user_id = Auth::id();
                $wish->save();
         return response()->json(['status' => 'Produit ajouté à la liste des favoris']);

            }
            else {
         return response()->json(['status' => 'product does not exist']);

            }
        }
        else
        {
         return response()->json(['status' => 'login to continue']);
        }
    return redirect()->route('wishlist.index');



    }
    public function delete_wishlist(Request $request)
    {
     if(Auth::check()){
            $product_id=$request->input('product_id');
            if(Wishlist::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                $wish=Wishlist::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $wish->delete();
                return response()->json(['status' => 'itemre removed from wishlist succefully']);
 
            }
                 
        }else{
            return response()->json(['status' => 'login to continue']);

     }
    }

}
