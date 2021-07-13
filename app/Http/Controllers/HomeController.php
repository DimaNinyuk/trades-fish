<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class HomeController extends Controller
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
    public function index()
    {
        $login = Auth::user();
        if(!empty($login->seller)){
            return redirect('seller-main/0');
        }else if(!empty($login->client)){
            return redirect('client-main');
        }  else {
            return redirect(url()->previous());
        }
        return redirect(url()->previous());
    }

}
