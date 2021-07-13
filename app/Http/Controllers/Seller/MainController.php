<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Image;
use App\Seller;
use App\Status;
use App\Trade;
use App\Type;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

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
    public function sellermain($status)
    {
        if ($status == 0) {

            $trades = Trade::where('seller_id',Auth::user()->seller->id)->get();
            return view('sellermain', compact('trades'));
        } else {
            $trades = Trade::where('status_id', $status)->where('seller_id',Auth::user()->seller->id)->get();
            return view('sellermain', compact('trades'));
        }
    }
    public function addTrede()
    {
        $user = Auth::user();
        $types = Type::get();
        return view('seller.selleraddtrade', compact('user', 'types'));
    }
    public function  createTrade()
    {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $start_price = $_POST['start-price'];
        $description = $_POST['description'];
        
        if (isset($_FILES["img"])) {
            $trade = Trade::create([
                'name' => $name,
                'description' => $description,
                'start_price' => $start_price,
                'status_id' => 3,
                'type_id' => $type,
                'seller_id' => Auth::user()->seller->id,
    
            ]);
            $uploaddir = public_path() . '/img';
            $namefile = time() . rand(0, 1000000) . '_' . basename($_FILES['img']['name']);
            $uploadfile = $uploaddir . '/' . $namefile;
            move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
            $imgstring = '/img/' . $namefile;
            Image::create([
                'img' => $imgstring,
                'trade_id' => $trade->id,

            ]);
        }
        return redirect(url()->previous());
    }
    public function editTrade($id){
        $user = Auth::user();
        $trade = Trade::where('id',$id)->first();
        $statuses = Status::get();
        return view('seller.selleredittrade',compact('user','trade','statuses'));

    }
    public function updateTrade(){
        $trade_id = $_POST['trade_id'];
        $status_id = $_POST['status_id'];
        Trade::where('id',$trade_id)->update([
            'status_id'=>$status_id,

        ]);
        return redirect(url()->previous());
    }
    public function deleteTrade(){
        $id = $_POST['trade_id'];
        Trade::where('id',$id)->first()->delete();
        return redirect(url()->previous());
    }
    public function analyticsTrade(){
        $user = Auth::user();
        $tradenew = Trade::where('seller_id',$user->seller->id)->where('status_id',3)->count();
        $tradewin = Trade::where('seller_id',$user->seller->id)->where('status_id',1)->count();
        $tradeclose = Trade::where('seller_id',$user->seller->id)->where('status_id',2)->count();
        $tradeall = Trade::where('seller_id',$user->seller->id)->count();
        $countrates=0;
        foreach(Trade::where('seller_id',$user->seller->id)->get() as $trade){
            $countrates=$countrates+$trade->rates()->count();

        }
        return view('seller.selleranalytic',compact('tradenew','tradewin','tradeclose','tradeall','user','countrates'));
    }
    public function editSeller(){
        $user = Auth::user();
        return view('seller.selleredit',compact('user'));
    }
    public function updateSeller(){
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $documents=$_POST['documents'];
        $userupdate = User::where('id',Auth::user()->id)->update([
            'email'=>$email,
            'phone'=>$phone,

        ]);
        Seller::where('user_id',Auth::user()->id)->update([
            'documents'=>$documents,

        ]);
        return redirect(url()->previous());
    }
    public function detailsTrade($id){
        $trade= Trade::where('id',$id)->first();
        return view('seller.sellertradedetails',compact('trade'));
    }
    
}
