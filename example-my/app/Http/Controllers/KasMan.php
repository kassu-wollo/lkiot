<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\KasWollo;
use App\Models\user;
class KasMan extends Controller
{
    function  kas(){return view('cust.kas');}
    function  register(){return view('cust.register');}
    function  table(){return view('cust.table');}
    function  chart(){return view('cust.chart');}
    public function contact(request $req){
        $user =new KasWollo;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->message=$req->input('message');
        $user->save();
    return view('welcome');
    }
   public  function flogin(){
        $role=auth()->user()->role;
        if($role=='admin'){
            return view('admin.dashboard');}
        if($role=='cust'){
            return view('cust.dashboard');
        }
    }
}
