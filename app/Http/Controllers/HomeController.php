<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Chefs;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id()){
            return redirect('redirects');
        }
        else
        $food = Food::all();
        $shefs = Chefs::all();
        return view('home', compact('food', 'shefs'));
    }

    public function redirects()
    {
        $food = Food::all();
        $shefs = Chefs::all();
        $count = Cart::where('user_id')->count();

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {

            return view('admin.home');
        } else {
            $user_id = Auth::id();
            $count = Cart::where('user_id', $user_id)->count();


            return view('home', compact('food', 'shefs', 'count'));
        }
    }


    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;
            $cart = new Cart;
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }

    public function showcart(Request $request, $id)
    {
        if(Auth::id()==$id){
            $count = Cart::where('user_id', $id)->count();
        $data = Cart::where('user_id', $id)->join('food', 'carts.food_id', '=', 'food.id')->get();
        $data2 = Cart::select('*')->where('user_id', '=', $id)->get();

        return view('showcart', compact('count', 'data', 'data2')); 
        }
       else
       {
        return redirect()->back();
       }
    }

    public function remove_item($id)
    {

        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function order_confirm(Request $request)
    {

        foreach ($request->food_name as $key => $food_name) {

            $data = new Order;
            $data->food_name = $food_name;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }
        return redirect()->back();
    }
}