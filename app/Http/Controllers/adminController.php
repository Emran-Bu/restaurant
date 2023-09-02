<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Food;

class adminController extends Controller
{
    // user
    public function user()
    {
        $users = User::all();
        return view('admin.user', compact("users"));
    }

    // delete user
    public function deleteuser($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect()->back();
    }

    // foodmenu
    public function foodmenu()
    {
        // $users = User::find($id);
        // $users->delete();
        return view('admin.foodmenu');
    }

    // foodmenu
    public function upload(Request $request)
    {
        $food = new Food;

        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $request->image->move('foodimage', $imageName);
            $food->image = $imageName;
        }

        $food->title = $request->title;

        $food->price = $request->price;

        $food->description = $request->description;

        $food->save();

        return redirect()->back();
    }
}
