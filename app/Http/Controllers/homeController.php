<?php
namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Fintic";
       
        return view('home.index')->with("viewData", $viewData);
        

    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Fintic";
       

        return view('home.about')->with("viewData", $viewData);

    }

    public function propos()
    {
        $viewData = [];
        $viewData["title"] = "à propos";
      
        return view('propos.index')->with("viewData", $viewData);
    }
}
