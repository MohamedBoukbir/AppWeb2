<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashbordController extends Controller
{
    public function logincontrole(){
        // dd($test);
        // dd('nadi');

        
        $user=Auth::user();
        // $user->attachRole('candidat');
       
    if ($user->hasRole('admin') ){
        $users = User::whereRoleIs( ['famille','candidat'])->orderBy('id','desc')->paginate("");
        $familles = User::whereRoleIs('famille')->orderBy('id','desc')->paginate("");
        $candidats = User::whereRoleIs('candidat')->orderBy('id','desc')->paginate("");
        return view('admin.adminHome', compact('users','familles','candidats'));
        // return view('admin');
    }
    elseif(Auth::user()->hasRole('famille')){
        return view('famille');
    }elseif(Auth::user()->hasRole('candidat')){
        
        return view('candidat');
    }
    else{
        // dd(Auth::user());
    }
     }

     public function selectUser(){
        $user=[
            'famille'=>'famille',
            'candidat'=>'candidat',
        ];
        return view('front.selectuser', compact('user'));
     }


  public function userAtacher(){

  }

}
