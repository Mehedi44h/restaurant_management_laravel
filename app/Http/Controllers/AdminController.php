<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function users(){
        $users=User::all();
        return view('admin.users',compact('users'));
    }

    public function delete($id){
        $users=User::find($id);
    $users->delete();
        return redirect()->back()->with('message', 'User deleted successfully.');
    }
}