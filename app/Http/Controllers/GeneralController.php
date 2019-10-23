<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Http\Requests\User\CreateRequest;
use App\Http\Requests\User\UpdateRequest;
use Illuminate\Database\Eloquent\Collection;
use Auth;
class GeneralController extends Controller
{
    public function index()
    {
   
        $users = User::all();
        $categories = Category::all();
        $posts = Post::all();
        $posts_by_user = $posts->where('user_id','=',Auth::id())->all();
      
    return view('general/index', [
        'categories' => $categories->toArray(), 
        'posts' => $posts->toArray(), 
        'posts_by_user'=> $posts_by_user,
        
    ]);
    }

    public function create()
    {
        
    }

    // public function store(CreateRequest $request)
    // {
    //     $data = $request->all();
    //     $user = User::create([
    //         'name' => $data['name'],
    //         'birthday'=> $data['birthday'],
    //         'phone_number'=> $data['phone_number'],
    //         'email' =>$data['email'],
    //         'password'=>bcrypt($data['password']),
    //         'role' => $data['role']=1,
    //         'is_active' => $data['is_active']=1,
            
    //     ]);
    //     return redirect()->route('users.index');
    // }
    public function edit($id)
    {
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
        $posts = Post::all()->load('users');
        $posts_by_id = Post::find($id);
        $users = User::all();
        $categories = Category::all();
       
        $posts_by_user = $posts->where('user_id','=',Auth::id())->all();
        $comments = Comment::all()->where('post_id','=',$id)->all();
        $usersComments = Comment::all()->load('users');
       
        
    return view('general/detail', [
        'categories' => $categories->toArray(), 
        'posts' => $posts->toArray(), 
        'posts_by_user'=> $posts_by_user,
        'posts_by_id' =>$posts_by_id->toArray(),
        'comments' =>$comments,
        'usersComments' =>$usersComments->toArray(),
    ]);
    }
    public function posts()
    {
        $posts = Post::all()->load('users');
        
        $posts_by_user = $posts->where('user_id','=',Auth::id())->all();
        $categories = Category::all();
        return view('general/posts',[
            'posts' => $posts->toArray(),
            'categories' => $categories->toArray(), 
        ]);
    }
}
