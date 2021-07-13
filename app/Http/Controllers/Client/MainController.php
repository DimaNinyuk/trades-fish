<?php

namespace App\Http\Controllers\Client;

use App\Client;
use App\Http\Controllers\Controller;
use App\Rate;
use App\Trade;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DateTime;

class MainController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function clientMain(){
        $newthreetrades = Trade::where('status_id',3)->get()->sortByDesc('created_at')->take(3);
        $newtrades =Trade::where('status_id',3)->get();
        return view('client.clientmain',compact('newthreetrades','newtrades'));
    }
    public function createRate(){
        $date = new DateTime();
        $price =$_POST['price'];
        $trade_id=$_POST['trade_id'];
        $client_id=Auth::user()->id;
        Rate::create([
            'date'=>$date,
            'price'=>$price,
            'trade_id'=>$trade_id,
            'client_id'=>$client_id,
        ]);
        return redirect(url()->previous());
    }
    public function updateRate(){
        $price =$_POST['price'];
        $rate_id=$_POST['rate_id'];
        $client_id=Auth::user()->id;
        Rate::where('id',$rate_id)->update([
            'price'=>$price,
        ]);
        return redirect(url()->previous());
    }
    
    public function myPrices(){
        $ratesclient = Rate::where('client_id',Auth::user()->id)->get();

        return view('client.myprices',compact('ratesclient'));
    }
    public function deleteRate(){
        $rate_id=$_POST['rate_id'];
        Rate::where('id',$rate_id)->delete();
        return redirect(url()->previous());
    }
    public function clientProfile(){
        $user = Auth::user();
        return view('client.clientedit',compact('user'));
    }
    public function updateProfile(){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address=$_POST['address'];
        $userupdate = User::where('id',Auth::user()->id)->update([
            'name'=>$name,
            'phone'=>$phone,

        ]);
        Client::where('user_id',Auth::user()->id)->update([
            'address'=>$address,

        ]);
        return redirect(url()->previous());
    }

}
