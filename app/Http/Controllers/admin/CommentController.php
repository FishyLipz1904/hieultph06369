<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Contact;
use App\Http\Requests\Comment\CreateRequest;
use Auth;
class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
    
        $posts = Post::all()->load('users');
       

        foreach ($comments as $comment){
            $comment->users;
            $test = $comment->posts->name;
            
        }
       
    return view('admin/comments/comments', [
        'comments' => $comments->toArray(),
    ]);
    }

    public function create()
    {

        $posts = Post::all()->load('users');
        return view('admin/comments/create',[
            'posts' => $posts
        ]);
    }

    public function show($id)
    {
        $data = Comment::find($id);
        dd($data);
        return view('admin/comments/show',[
            
        ]);
    }

    public function store(CreateRequest $request)
    {
        $data = $request->all();
       
        $data = Comment::create([
            'post_id' => $data['post_id'],
            'content' =>$data['content'],
            'user_id' =>$data['auth_id'],
            'is_active' => 1,
            
        ]);
        if(Auth::user()->role === config('role.member')){
            return redirect()->route('general.show', $data['post_id']);
        }
        return redirect()->route('comments.index');
    }
    
    public function edit($id)
    {
        
        $data = Comment::find($id);
        
        $posts = Post::all()->load('users');
        $chosen = $posts->where('id','=',$data['post_id'])->pluck('title');
       
        return view('comments/edit',[
            $post_id= 'post_id' => $data['post_id'],
            $content= 'content' =>$data['content'],
            $user_id = 'user_id' =>$data['auth_id'],
            $status= 'is_active' =>$data['is_active'],
            $post_name= 'post_name'=> $chosen[0],
            'posts' => $posts,
            $id = 'id' =>$data['id'],
        ]);
    }

    public function update(CreateRequest $request)
    {
        $data = $request->except('_token');
        
        $data = Comment::find($request->id);
        
        $data->update($request->all());
    
            return redirect()->route('comments.index');
    }

    public function destroy($id)
    {
        $data = Comment::find($id);
        $data->delete();

        return redirect()->route('comments.index');
    }

    
    
}
