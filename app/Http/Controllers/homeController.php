<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

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
