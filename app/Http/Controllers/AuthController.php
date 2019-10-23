<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Auth;
class AuthController extends Controller
{
    use AuthenticatesUsers;

    public function getLoginForm(){
      return view('auth/login');
    }
    public function login(LoginRequest $request){
      
      if($this->attemptLogin($request)){
        return redirect()->route('users.index');
      }
      return redirect()->route('auth.login');
    }
    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }
    public function getRegisterForm(){
      return view('auth/register');
    }
    public function register(RegisterRequest $request){
      $data = $request->all();
      $user = User::create([
          'name' => $data['name'],
          'birthday'=> $data['birthday'],
          'phone_number'=> $data['phone_number'],
          'email' =>$data['email'],
          'password'=>bcrypt($data['password']),
          'role' => $data['role']=config('role.member'),
          'is_active' => $data['is_active']=config('active_status.active'),
          
      ]);
      return redirect()->route('auth.login');
    }
}