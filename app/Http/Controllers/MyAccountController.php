<?php
namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyAccountController extends Controller
{
public function orders()
{
$viewData = [];
$viewData["title"] = "My Orders - FINTIC";
$viewData["subtitle"] = "My Orders";
$viewData["orders"] = Order::with(['items.product'])->where('user_id', Auth::id())->get();
// $viewData["favoris"] = Wishlist::where('user_id', Auth::id())->get();
// $viewData["products"] = Product::findOrFail(Auth::user()->id);
return view('myaccount.orders')->with("viewData", $viewData);
}

// public function delete($id)
// {
//     Order::destroy($id);
//     return redirect()->back()->with('message', 'data deleted successfully.');
// }

public function delete($id)
{
    $order = Order::findOrFail($id);
    $order->delete();
    
    return redirect()->route('myaccount.orders')->with('success', 'Order has been deleted.');
}


}