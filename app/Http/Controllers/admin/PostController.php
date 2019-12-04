<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Http\Requests\Post\CreateRequest;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        $categories = Category::all()->load('users');
       
        
    
    foreach ($posts as $post){
        $post->users;
        $test = $post->categories->name;
       
    }
    
    return view('admin/posts/posts', [
        'posts' => $posts->toArray(),
        'categories'=>$categories,
    ]);
    }

    public function create()
    {
        $categories = Category::all()->load('users');
        
        return view('admin/posts/create', [ 
            'categories' => $categories
            ]);
    }
   
    public function store(Request $request)
    {
       $data = $request->all();
      
       $photo = $request->file('filename')->getClientOriginalName();
      
       $destination = base_path() . '/public/images';
       $photoName = time().'.'.$request->filename->getClientOriginalExtension();
       $request->file('filename')->move($destination, $photoName);
      
       Post::create([
        'title' => $data['title'],
        'content'=> $data['content'],
        'user_id'=> $data['user_id'],
        'category_id'=> $data['category_id'],
        'filename'=>$photoName,
       ]);
      
       return redirect()->route('posts.index');
    }


    public function edit($id)
    {
        
        $data = Post::find($id);
        $categories = Category::all()->load('users');
        $chosen = $categories->where('id','=',$data['category_id'])->pluck('name');
        return view('admin/posts/edit',[ 
            'categories' => $categories,
            $title = 'title' => $data['title'],
            $content= 'content'=> $data['content'],
            $category_id= 'category_id'=> $data['category_id'],
            $category_name= 'category_name'=> $chosen[0],
            'user_id' =>$data['user_id'],
            $id = 'id'=>$data['id'],
           
        ]);
       
    }

    public function update(CreateRequest $request)
    {
        $data = $request->except('_token');
        
        $data = Post::find($request->id);
        
        $data->update($request->all());
    
            return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $posts = Post::find($id);
        $posts->delete();

        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $data = Post::find($id);
        $categories = Category::all()->load('users');
        $chosen = $categories->where('id','=',$data['category_id'])->pluck('name');
        return view('admin/posts/show',[ 
            'categories' => $categories,
            $title = 'title' => $data['title'],
            $content= 'content'=> $data['content'],
            $category_id= 'category_id'=> $data['category_id'],
            $category_name= 'category_name'=> $chosen[0],
            'user_id' =>$data['user_id'],
           
        ]);
    }
}
//Post is done 
