<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Seller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    function createClient()
    {
       
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $user = User::create([
          
            'email' => $email,
            'password' => Hash::make($password),
            'phone' => $phone,

        ]);
        $client = Client::create([
            'address' => $address,
            'user_id' => $user->id,

        ]);

        return redirect('client-main');
    }
    function createSeller()
    {
       
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $document = $_POST['document'];
        $user = User::create([
          
            'email' => $email,
            'password' => Hash::make($password),
            'phone' => $phone,

        ]);
        $client = Seller::create([
            'documents' => $document,
            'user_id' => $user->id,

        ]);

        return redirect('seller-main');
    }
}
