<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
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
       
    }

    return view('starter', [
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = User::create([
            'name' => $data['name'],
            'email' =>$data['email'],
            'birthday'=> $data['birthday'],
            'password'=>$data['password'],
            'address'=>$data['address'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $request->except('_token');
   
    $data = User::find($request->id);
   
    $data->update($request->all());

        return redirect()->route('users.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        // dd($user['id']);
        return view('users/update',[
            $name = 'name' => $user['name'],
            $email= 'email' =>$user['email'],
            $birthday = 'birthday'=> $user['birthday'],
            $password = 'password'=>$user['password'],
            $address = 'address'=>$user['address'],
            $id ='id'=> $user['id'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index');
    }
}
