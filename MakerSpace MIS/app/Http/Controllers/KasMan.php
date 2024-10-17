<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\KasWollo;
use App\Models\Makerspace;
use App\Models\Team;
use App\Models\Report;
use App\Models\user;
use Illuminate\Support\Facades\DB;
class KasMan extends Controller
{
    function  kas(){return view('cust.dashboard');}
    function  static(){return view('cust.static');}
    function  table(){return view('cust.table');}
    function  chart(){return view('cust.chart');}
    function  admin(){return view('admin.dashboard');}
    function  report(){return view('admin.report');}
    function  mregister(){return view('admin.mregister');}
    function  team(){return view('admin.team');}
    public function contact(request $req){
        $user =new KasWollo;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->message=$req->input('message');
        $user->save();
    return view('home');
    }
 
    public function pindex(): View
    {
      $student = Report::all();
      return view('admin.preportshow', compact('student'));
    }
    public function registerreport(request $req){
        $user =new Report;
        $user->acomp=$req->input('acomp');
        $user->rdate=$req->input('rdate');
        $user->challenge=$req->input('challenge');
        $user->oppo=$req->input('oppo');
        $user->nstep=$req->input('nstep');
        $user->edate=$req->input('edate');
        $user->save();
        $student = Report::all();
        return view('admin.preportshow', compact('student'));
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


//maker Space 
public function makerspace(request $req){
    $user =new Makerspace;
    $user->name=$req->input('name');
    $user->email=$req->input('email');
    $user->phone=$req->input('phone');
    $user->status=$req->input('status');
    $user->descrbition=$req->input('descrbition');
    $user->save();
    $maker = makerspace::all();
    return view('admin.mview', compact('maker'));
}
    public function mindex(): View
    {
    $maker = makerspace::all();
      return view('admin.mview', compact('maker'));
    }
   public function teamreg(request $req){
    $team= new Team();
    $team->fname=$req->input('fname');
    $team->role=$req->input('role');
    $team->location=$req->input('location');
    $team->phone=$req->input('phone');
    $team->email=$req->input('email');
    $team->task=$req->input('task');
    $team->project=$req->input('project');
    $team->save();
    $team=Team::All();
    return view('admin.teamshow', compact('team'));
   }
public function teamshow(): view{
    $team=Team::All();
    return view('admin.teamshow', compact('team'));
}
public function destroy($email)
{
    $student=team::where('email',$email)->delete();
    $team=Team::All();
    return view('admin.teamshow', compact('team'));
       }

}
