<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\KasWollo;
use App\Models\user;
use Illuminate\Support\Facades\DB;
class KasMan extends Controller
{
    function  kas(){return view('cust.dashboard');}
    function  static(){return view('cust.static');}
    function  table(){return view('cust.table');}
    function  chart(){return view('cust.chart');}
    function  report(){return view('admin.report');}
    public function contact(request $req){
        $user =new KasWollo;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->message=$req->input('message');
        $user->save();
    return view('home');
    }
    public function flogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Check the user type and redirect accordingly
            $user = Auth::user();
            if ($user->role == 'admin') {
                return view ('admin.dashboard');
            } else {
                return view ('cust.dashboard');
            }
        }

        return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
    }
    public function index(): View
    {
      $student = user::all();
      return view('cust.kas', compact('student'));
    }
}
