<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\food;
use App\Models\chef;
use App\Models\breakfast;
use App\Models\lunch;
use App\Models\dinner;
use App\Models\reservation;

class AdminController extends Controller
{
    public function users(){
        $users = User::all();
        return view('admin.users',compact('users'));
    }

    public function delete_users($id){
        $user = User::find($id);

        $user->delete();

        return redirect()->back();
    }

    public function foodmenu(){
        return view('admin.addfoodmenu');
    }

    public function addfoodmenu(Request $request){

        $food = new food();

        $food->title = $request->title;
        $food->price = $request->price;
        $food->description = $request->description;
        
        $image = $request->image;

       $imageName = time().'.'.$image->getClientOriginalExtension();

       $request->image->move('foodimage',$imageName);

       $food->image = $imageName;

        $food->save();
        return redirect()->back();

    }


    public function show_food_menu(){

        $food = food::all();
        return view('admin.show_food_menu',compact('food'));
    }

    public function add_chefs(){
        return view('admin.add_chefs');
    }

    public function addchefs(Request $request){

        $chef = new chef();

        $chef->name = $request->name;
        $chef->role = $request->role;
       
        
        $image = $request->image;

       $imageName = time().'.'.$image->getClientOriginalExtension();

       $request->image->move('chefsimages',$imageName);

       $chef->image = $imageName;

        $chef->save();
        return redirect()->back();

    }

    public function show_all_chefs(){
        $data = chef::all();
        return view('admin.show_all_chefs',compact('data'));
    }

    public function delete_food_menu($id){
        $food = food::find($id);
        $food->delete();
        return redirect()->back();
    }
    public function delete_chef($id){
        $food = chef::find($id);
        $food->delete();
        return redirect()->back();
    }

    public function edit_chef($id){
        $data = chef::find($id);
        return view('admin.edit_chef',compact('data'));
    }

    public function save_edit_chefs(Request $request, $id){
        $chef= chef::find($id);

        $chef->name = $request->name;
        $chef->role = $request->role;
        $image = $request->image;

        if($image){

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('chefsimages',$imageName);
     
            $chef->image = $imageName;
        }
        $chef->save();
        return redirect()->back();
    }


    public function edit_food_menu($id){
        $data = food::find($id);
        return view('admin.edit_food_menu',compact('data'));
    }

    public function save_edit_food(Request $request, $id){
        $food = food::find($id);
         
        $food->title = $request->title;
        $food->price = $request->price;
        $food->description = $request->description;
         $image = $request->image;

        if($image){

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('foodimage',$imageName);
     
            $food->image = $imageName;
        }
        $food->save();
        return redirect()->back();

        
    }


    public function reservation(Request $request){
   
                
            $data = new reservation();

            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->date = $request->date;
            $data->guest = $request->guest;
            $data->time = $request->time;
            $data->message = $request->message;
            $data->save();
            return redirect()->back();
             
       
    }



    public function show_reservations(){
        $data = reservation::all();
        return view('admin.show_reservations',compact('data'));
    }

    public function search_food(Request $request){
         $search = $request->search;
        $food = food::where('title', 'LIKE', "%$search%")->get();
     
        return view('admin.show_food_menu',compact('food'));
       
    }
    public function add_breakfast(){
        return view('admin.add_breakfast');
    }


    public function add_lunch(){
        return view('admin.add_lunch');
    }


    public function add_dinner(){
        return view('admin.add_dinner');
    }

    
    public function add_breakfast_save(Request $request){
        $data = new breakfast();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $image = $request->image;

       

        $imageName = time().'.'.$image->getClientOriginalExtension();
 
        $request->image->move('breakfastImg',$imageName);
 
        $data->image = $imageName;
 
         $data->save();
         return redirect()->back();


    }
    public function add_lunch_save(Request $request){
        $data = new lunch();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $image = $request->image;

       

        $imageName = time().'.'.$image->getClientOriginalExtension();
 
        $request->image->move('lunchImg',$imageName);
 
        $data->image = $imageName;
 
         $data->save();
         return redirect()->back();


    }
    public function add_dinner_save(Request $request){
        $data = new dinner();
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $image = $request->image;

       

        $imageName = time().'.'.$image->getClientOriginalExtension();
 
        $request->image->move('dinnerImg',$imageName);
 
        $data->image = $imageName;
 
         $data->save();
         return redirect()->back();


    }

    public function show_breakfast(){
        $data = breakfast::all();
        return view('admin.show_breakfast',compact('data'));
    }
    public function show_lunch(){
        $data = lunch::all();
        return view('admin.show_lunch',compact('data'));
    }
    public function show_dinner(){
        $data = dinner::all();
        return view('admin.show_dinner',compact('data'));
    }


    public function edit_breakfast($id){
        $data = breakfast::find($id);
        return view('admin.edit_breakfast',compact('data'));
    }

    public function edit_lunch($id){
        $data = lunch::find($id);
        return view('admin.edit_lunch',compact('data'));
    }

    public function edit_dinner($id){
        $data = dinner::find($id);
        return view('admin.edit_dinner',compact('data'));
    }

    public function save_edit_breakfast(Request $request, $id){
        $breakfast = breakfast::find($id);
         
        $breakfast->title = $request->title;
        $breakfast->price = $request->price;
        $breakfast->description = $request->description;
         $image = $request->image;

        if($image){

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('breakfastImg',$imageName);
     
            $breakfast->image = $imageName;
        }
        $breakfast->save();
        return redirect()->back();

        
    }
    public function save_edit_lunch(Request $request, $id){
        $lunch = lunch::find($id);
         
        $lunch->title = $request->title;
        $lunch->price = $request->price;
        $lunch->description = $request->description;
         $image = $request->image;

        if($image){

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('lunchImg',$imageName);
     
            $lunch->image = $imageName;
        }
        $lunch->save();
        return redirect()->back();

        
    }
    public function save_edit_dinner(Request $request, $id){
        $dinner = dinner::find($id);
         
        $dinner->title = $request->title;
        $dinner->price = $request->price;
        $dinner->description = $request->description;
         $image = $request->image;

        if($image){

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('dinnerImg',$imageName);
     
            $dinner->image = $imageName;
        }
        $dinner->save();
        return redirect()->back();

        
    }


    public function delete_breakfast_menu($id){
        $breakfast = breakfast::find($id);
        $breakfast->delete();
        return redirect()->back();
    }


    public function delete_lunch_menu($id){
        $lunch = lunch::find($id);
        $lunch->delete();
        return redirect()->back();
    }


    public function delete_dinner_menu($id){
        $dinner = dinner::find($id);
        $dinner->delete();
        return redirect()->back();
    }
}
