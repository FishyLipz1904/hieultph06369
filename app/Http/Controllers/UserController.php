<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\UpdateRequest;
use Auth;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
    
    foreach ($users as $user){
        $user->posts;
        $user->comments;
        $user->categories;
    }

    return view('index', [
        'users' => $users->toArray(),
    ]);
    }

    public function create()
    {
        return view('users.create');
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
        return view('users/edit',[
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
        return view('users/show',[
            $name = 'name' => $user['name'],
            $email= 'email' =>$user['email'],
            $birthday = 'birthday'=> $user['birthday'],
            $password = 'password'=>$user['password'],
            $address = 'address'=>$user['address'],
            $id ='id'=> $user['id'],
        ]);
    }
}
//user đã xong thêm sửa xóa hiển thị - Hiển thị có thể thêm danh sách post trong phần hiển thị 
// thêm danh sách bình luận, category được tạo bởi user ( admin )
