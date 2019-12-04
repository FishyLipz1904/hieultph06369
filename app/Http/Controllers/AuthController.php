<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
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
        return redirect()->route('index');
      }
      return redirect()->route('auth.login');
    }
    public function logout(Request $request) {
      Auth::logout();
      return redirect()->route('website.index');
    }
    public function getRegisterForm(){
      return view('auth/register');
    }
    public function register(RegisterRequest $request){
      $data = $request->all();
     
      $photo = $request->file('filename')->getClientOriginalName();
      
        $destination = base_path() . '/public/images';
        $photoName = time().'.'.$request->filename->getClientOriginalExtension();
        $request->file('filename')->move($destination, $photoName);
        
      User::create([
          'name' => $data['name'],
          'birthday'=> $data['birthday'],
          'phone_number'=> $data['phone_number'],
          'email' =>$data['email'],
          'password'=>bcrypt($data['password']),
          'role' => config('active_status.active'),
          'is_active' => config('role.member'),
          'filename'=> $photoName,
      ]);
     
      return redirect()->route('auth.login');
    }

      //save the data to the database
        
    

}