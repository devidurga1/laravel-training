<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class CustomAuthController extends Controller
{
    



    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        
        return view('auth.login');
    }  
      
    
   
    public function customLogin(Request $request)
       
    {
        
       
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:20',
        ]);
    
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
    
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    
    
    
    
   public function signOut(Request $request) {
        // Session::flush();
        // Auth::logout();
    
         Auth::logout();
  
    $request->session()->flush();
        return Redirect('login');
     }
}