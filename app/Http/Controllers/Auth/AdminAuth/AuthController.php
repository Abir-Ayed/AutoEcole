<?php

namespace App\Http\Controllers\Auth\AdminAuth;
use App\User;
use App\auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    

 //use AuthenticatesAndRegistersUsers, ThrottlesLogins;

  protected $redirectTo = '/acceuilAdmin';
    protected $LoginPath = 'auth/login';
    protected $redirectAfterLogout = '/acceuilAdmin';

  public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }


     public function showLoginForm(){

        if(view()->exists('auth.authenticate')){
            return view('auth.authenticate');
        }
        return view('auth.login');
    }


    public function Login(Request $request){

       $this->validate($request,[
        'email' =>'required|email',
        'password'=>'required|min:6'
       ]);
       if (Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)) {
        return redirect()->intended(route('acceuilAdmin.acceuil'));
        
       }
       return redirect->back()->withInput($request->only('email','remember'));
    }
    
    
    public function showRegistrationForm(){

        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public  function validator($request,array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'date_naissance' => 'required|date',
            'telephone' => 'required',

            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'date_naissance' => $data['date_naissance'],
            'telephone' => $data['telephone'],
            'role' => $data['role'],


            'password' => Hash::make($data['password']),
        ]);
    }
    protected function guard(){
        return Auth::guard('admin');
    }
     
}
