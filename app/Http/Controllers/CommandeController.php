<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Message;
use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CommandeController extends Controller
{
    

    

     public function index()
     {
         $viewData = [];
         $viewData["commande"] = Commande::all();
         $viewData["title"] = "commande - FINTIC";
         return view('commande.index')->with("viewData", $viewData);
     }

     
    

   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'telephone' => ['required','numeric','gt:0'],
            'product' => ['required'],
            'adresse' => ['required'],
        ]);
    }

   
    protected function create(array $data)
    {
        return Commande::create([
            'name' => $data['name'],
            'telephone' => $data['telephone'],
            'product' => $data['product'],
            'adresse' => $data['adresse'],
        ]);
    }
    public function store(Request $request)
    {
         $viewData["commande"]  = new Commande([
            'name' => $request->get('name'),
            'telephone' => $request->get('telephone'),
            'product' => $request->get('product'),
            'adresse' => $request->get('adresse'),
        ]);

         $viewData["commande"] ->save();

         return back()->with('success', 'Message Envoyé avec succes.');
        
    }
}
?>