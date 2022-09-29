<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\reservation;
use App\Models\Chef;
use App\Models\Order;

class AdminController extends Controller
{
    public function users(){

        $data = user::all();

        return view('admin.users',compact('data'));

    }

    public function userdelete($id){

        $data = user::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function foodmenu(){

        $data = food::all();

        return view('admin.foodmenu',compact('data'));

    }

    public function addfood(Request $request){

        $data  = new food;



        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage',$imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();

    }

     public function deletefood($id){

        $data = food::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function updatefood($id){

        $data = food::find($id);

        return view('admin.updatefood',compact('data'));

    }

    public function update(Request $request, $id){

        $data  = food::find($id);

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage',$imagename);

        $data->image = $imagename;

        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;

        $data->save();

        return redirect()->back();

    }

    public function reservation(Request $request){

        $data = new reservation;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->person = $request->person;
        $data->message = $request->message;

        $data->save();

        return redirect()->back();

    }

    public function showreservation(){

        $data = reservation::all();

        return view('admin.showreservation',compact('data'));

    }

    public function foodchef(){

        $data = chef::all();

        return view('admin.chef',compact('data'));

    }

    public function deletechef($id){

        $data = chef::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function chefupdate($id){

        $data = chef::find($id);

        return view('admin.update',compact('data'));

    }


    public function updatechef(Request $request, $id){


        $data = chef::find($id);

        $image = $request->image;

        if ($image) {

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('chefimage',$imagename);

            $data->image = $imagename; 
        }

        

        $data->name = $request->name;

        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();


    }







    public function addchef(Request $request){

        $data  = new chef;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();

        $request->image->move('chefimage',$imagename);

        $data->image = $imagename;

        $data->name = $request->name;
        $data->speciality = $request->speciality;

        $data->save();

        return redirect()->back();


    }


    public function order(){

        $data = order::all();

        return view('admin.order',compact('data'));

    }
}
