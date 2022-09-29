<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Food;

use App\Models\Chef;

use App\Models\Cart;

use App\Models\Order;

class HomeController extends Controller
{
    public function index(){

        $data = food::all();

        $data1 = chef::all();

        return view('home.home',compact('data','data1'));

    }

    public function redirects(){

        $data = food::all();

        $data1 = chef::all();

        $usertype = Auth::user()->usertype;

        if($usertype == '1'){

            return view('admin.adminhome');

        }

        else{

            $user_id  = Auth::id();

            $count = cart::where('user_id',$user_id)->count();

            
            return view('home.home',compact('data','data1','count'));

        }

    }

    public function addcart(Request $request, $id){

        if(Auth::id()){

            $user_id  = Auth::id();

            $food_id = $id;

            $quantity = $request->quantity;

            $data  = new cart;

            $data->user_id = $user_id;
            $data->food_id = $food_id;
            $data->quantity = $quantity;

            $data->save();



            return redirect()->back();

        }

        else{

            return redirect('login');

        }

    }

    public function showcart(Request $request,$id){

        $count = cart::where('user_id',$id)->count();

        $data2 = cart::select('*')->where('user_id', '=', $id)->get();

        $data = cart::where('user_id',$id)->join('food', 'carts.food_id', '=' , 'food.id')->get();


        return view('home.showcart',compact('count','data','data2'));

    }

    public function removefood($id){

        $data = cart::find($id);

        $data->delete();

        return redirect()->back();


    }

    public function orderconfirm(Request $request){

        foreach($request->foodname as $key =>$foodname)
        {
            $data = new Order;

            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity=$request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;

            $data->save();
        }

        return redirect()->back();

    }

    
}
