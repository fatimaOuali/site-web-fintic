<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Fintic";
        // $profile = User::findOrFail(Auth::user()->id);
        // $viewData["title"] = $profile->name." ";
        // $viewData["profile"] = Profile::all();
        return view('home.index')->with("viewData", $viewData);
        

    }
    public function about()
    {
        $viewData = [];
        $viewData["title"] = "Home Page - Fintic";
        // $profile = User::findOrFail(Auth::user()->id);
        // $viewData["title"] = $profile->name." ";
        // $viewData["profile"] = Profile::all();

        return view('home.about')->with("viewData", $viewData);

    }

    public function propos()
    {
        $viewData = [];
        $viewData["title"] = "à propos";
        $viewData["profile"] = Profile::all();
        return view('propos.index')->with("viewData", $viewData);
    }
}
