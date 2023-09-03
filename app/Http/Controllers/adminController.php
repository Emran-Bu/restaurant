<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Food;

use App\Models\Chef;

use App\Models\Reservation;

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
        $data = Food::all();
        return view('admin.foodmenu', compact("data"));
    }

    // foodmenu
    public function deletefood($id)
    {
        $data = Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    // foodview
    public function foodview($id)
    {
        $data = Food::find($id);
        return view('admin.foodview', compact("data"));
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

    // updatefood
    public function updatefood(Request $request, $id)
    {
        $food = Food::find($id);

        if ($request->hasFile('image')) {
            $oldImage = $request->oldImage;
            if($oldImage)
            {
                $location = "foodimage/". $oldImage;
                unlink($location);
            }
            $image = $request->image;
            $imageName = time() . "." . $image->getClientOriginalExtension();
            $request->image->move('foodimage', $imageName);
            $food->image = $imageName;
        }

        $food->title = $request->title;

        $food->price = $request->price;

        $food->description = $request->description;

        $food->update();

        // return redirect()->back();
        $data = Food::all();
        return view('admin.foodmenu', compact("data"));
    }

    // reservation
    public function reservation(Request $request)
    {
        $reservation = new Reservation;

        $reservation->name = $request->name;
        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->guest = $request->guest;
        $reservation->date = $request->date;
        $reservation->time = $request->time;
        $reservation->message = $request->message;

        $reservation->save();

        return redirect()->back();
    }

    // viewreservation
    public function viewreservation()
    {
        $data = Reservation::all();
        return view('admin.adminreservation', compact("data"));
    }

    // deletereservation
    public function deletereservation($id)
    {
        $data = Reservation::find($id);
        $data->delete();
        return redirect()->back();
    }

    // chef
    public function chef()
    {
        $data = Chef::all();
        return view("admin.adminchef", compact("data"));
    }

    // uploadchef
    public function uploadchef(Request $request)
    {
        $chef = new Chef;

        if ($request->image) {
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imageName);
            $chef->image = $imageName;
        }

        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        $chef->save();

        return redirect()->back();
    }

    // deletechef
    public function deletechef($id)
    {
        $data = Chef::find($id);
        $data->delete();

        return redirect()->back();
    }

    // chefview
    public function chefview($id)
    {
        $data = Chef::find($id);
        return view("admin.chefview", compact("data"));
    }

    // updatechef
    public function updatechef(Request $request, $id)
    {
        $chef = Chef::find($id);

        if ($request->image) {

            $oldImage = $request->oldImage;
            if($oldImage)
            {
                $location = 'chefimage/' . $oldImage;
                unlink($location);
            }
            $image = $request->image;
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('chefimage', $imageName);
            $chef->image = $imageName;
        }

        $chef->name = $request->name;
        $chef->speciality = $request->speciality;
        $chef->update();

        return redirect()->back();
    }
}
