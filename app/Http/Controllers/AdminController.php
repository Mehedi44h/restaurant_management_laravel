<?php

namespace App\Http\Controllers;

use App\Models\Chefs;
use App\Models\Food;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Models\User;
use Session;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back()->with('message', 'User deleted successfully.');
    }
    public function foodmenu()
    {
        $foods = Food::all();
        return view('admin.foodmenu', compact('foods'));
    }

    public function uploadfood(Request $request)
    {
        $food = new Food;
        $food->title = $request->title;
        $food->price = $request->price;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('food_images', $imagename);
        $food->image = $imagename;

        $food->description = $request->description;
        $food->save();
        return redirect()->back()->with('message', 'Food added successfully');
    }

    public function delete_food($id)
    {
        $foods = Food::find($id);
        $foods->delete();
        return redirect()->back()->with('message', 'Food deleted successfully.');
    }

    public function edit_food($id)
    {
        $foods = Food::find($id);
        return view('admin.edit_food', compact('foods'));
    }

    public function update(Request $request, $id)
    {
        $foods = Food::find($id);
        $foods->title = $request->title;
        $foods->price = $request->price;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('food_images', $imagename);
        $foods->image = $imagename;

        $foods->description = $request->description;
        $foods->save();
        return redirect()->back()->with('message', 'Food updated successfully');
    }

    public function reservation(Request $request)
    {
        $data = new Reservation;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->guest = $request->guest;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->date = $request->date;


        $data->save();
        return redirect()->back()->with('message', 'Food updated successfully');
    }

    public function reserved()
    {
        $rvdata = Reservation::all();
        return view('admin.reserved', compact('rvdata'));
    }

    public function cancel_reserve($id)
    {
        $rvdata = Reservation::find($id);
        $rvdata->delete();
        return redirect()->back();
    }

   public function view_shefs(){
    $shefs=Chefs::all();
    return view('admin.view_shefs',compact('shefs'));
   }
   
   public function add_shefs(Request $request){
    $shefs=new Chefs;

    $shefs->name = $request->name;
        $shefs->speciality = $request->speciality;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('shef_images', $imagename);
        $shefs->image = $imagename;
        $shefs->save();
        return redirect()->back();
   }

   
}