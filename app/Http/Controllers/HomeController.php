<?php

namespace App\Http\Controllers;

use App\Models\breakfast;
use App\Models\lunch;
use App\Models\dinner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\food;
use App\Models\chef;

class HomeController extends Controller
{
    public function index(){
        $data = food::all();
        $chefs = chef::all();
        $user = food::all();

        $breakfast1 = breakfast::where('id','<',4)->get();
        $breakfast2 = breakfast::where('id','<',4)->get();

        $lunch1 = lunch::where('id','<',4)->get();
        $lunch2 = lunch::where('id','>',3)->get();

        $dinner1= dinner::where('id','<',4)->get();
        $dinner2 = dinner::where('id','>',3)->get();
     
    
        return view('home',compact('data','chefs','user', 'breakfast2', 'breakfast1','lunch1','dinner1','lunch2','dinner2'));
    }

    public function redirects(){
        $usertype = Auth::user()->usertype;
        if($usertype == '1'){
            return view('admin.adminhome');
        }else{

           
            $data = food::all();
            $chefs = chef::all();
            $user = food::all();
    
            $breakfast1 = breakfast::where('id','<',4)->get();
            $breakfast2 = breakfast::where('id','<',4)->get();
    
            $lunch1 = lunch::where('id','<',4)->get();
            $lunch2 = lunch::where('id','>',3)->get();
    
            $dinner1= dinner::where('id','<',4)->get();
            $dinner2 = dinner::where('id','>',3)->get();
         
        
            return view('home',compact('data','chefs','user', 'breakfast2', 'breakfast1','lunch1','dinner1','lunch2','dinner2'));
        }
    }
}
