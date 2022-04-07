<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
   public function login()
   {
       return view('auth.login');
   }

   public function postlogin(Request $request)
   {
     
       if(Auth::attempt($request->only('email','password'))){
           return redirect('/dashboard');
        // echo "success";
       }else{
        //    echo "Error";  
              return redirect('/login');  
       }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');    
    }

    public function register(){
        return view('auth.register');
    }

    public function postregister(Request $request)
    {
        $this->validate($request, [
            'password'=>'nullable|required_with:password_confirmation|string|confirmed'
        ]);
        $password = $request->password;

        User::create([
            'nik'=> $request->nik,
            'name'=> $request->name,
            'email'=> $request->email,
            'role' => 'user',
            'password'=> bcrypt($password)
        ]);        
        return redirect('/login');
   }
 

    protected function validator(array $data)
    {

    }
}
