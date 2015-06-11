<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Redirect;
use Socialize;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Registration & Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users, as well as the
      | authentication of existing users. By default, this controller uses
      | a simple trait to add these behaviors. Why don't you explore it?
      |
     */
    /**
     * Redirect to after register/login success
     * @var string
     */
    protected $redirectTo = '/';

    use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @internal param Guard $auth
     * @internal param Registrar $registrar
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    // To redirect github
    public function facebookRedirect()
    {
        return Socialize::with('facebook')->redirect();
    }

    // to get authenticate user data
    public function facebook()
    {
        $user = Socialize::with('facebook')->user();
        // Do your stuff with user data.
        dd($user);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
