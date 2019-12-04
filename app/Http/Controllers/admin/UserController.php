<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Blog;
//User configuration for admins
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
    
        foreach ($users as $user){
            $user->posts;
            $user->comments;
            $user->categories;
        }
    
        return view('admin/users/users', [
            'users' => $users->toArray(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/users.create');
    }

    public function store(CreateRequest $request)
    {
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'birthday'=> $data['birthday'],
            'phone_number'=> $data['phone_number'],
            'email' =>$data['email'],
            'password'=>bcrypt($data['password']),
            'role' => $data['role'],
            'is_active' => $data['is_active']=1,
            
        ]);
        return redirect()->route('users.index');
    }
    public function edit($id)
    {
        $users = User::all();
        $data = User::find($id);
        return view('admin/users/edit',[
            'name' => $data['name'],
            'birthday'=> $data['birthday'],
            'phone_number'=> $data['phone_number'],
            'email' =>$data['email'],
            'password'=>bcrypt($data['password']),
            'role' => $data['role'],
            'is_active' => $data['is_active'],
            $id ='id'=> $data['id'],
            'users' => $users->toArray(),
        ]);
    }

    public function update(UpdateRequest $request)
    {
        $data = $request->except('_token');
        
        $data = User::find($request->id);
        
        $data->update($request->all());
    
            return redirect()->route('users.index');
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
       
        $user->delete();

        return redirect()->route('users.index');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view('admin/users/show',[
            $name = 'name' => $user['name'],
            $email= 'email' =>$user['email'],
            $birthday = 'birthday'=> $user['birthday'],
            $password = 'password'=>$user['password'],
            $address = 'address'=>$user['address'],
            $id ='id'=> $user['id'],
        ]);
    }
}
