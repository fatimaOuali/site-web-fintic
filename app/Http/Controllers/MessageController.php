<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class MessageController extends Controller
{
    

    

     public function index()
     {
         $viewData = [];
         $viewData["message"] = Message::all();
        //  User::findOrFail(Auth::user()->id);
         $viewData["title"] = "message - FINTIC";
         return view('message.index')->with("viewData", $viewData);
     }

     
    

   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'message' => ['required'],
        ]);
    }

   
    protected function create(array $data)
    {
        return Message::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);
    }
    public function store(Request $request)
    {
         $viewData["message"]  = new Message([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ]);

         $viewData["message"] ->save();

         return back()->with('success', 'Message Envoyé avec succes.');
        
    }
}
?>