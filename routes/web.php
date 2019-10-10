<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\User;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
Route::get('hello','HelloController@index');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('starter', function () {
    $posts = factory(Post::class, 10)
        ->make()
        ->toArray();
        return view('starter', [
            'posts' => $posts
        ]);
});


Route::get('users', function () {
    
    $users = User::all();
    
    foreach ($users as $user){
        $user->posts;
       
    }

    return view('starter', [
        'users' => $users->toArray(),
    ]);
})->name('users.index');

Route::view('users/create','users/create')->name('users.create');

Route::get('users/update/{id}', function($id){
    //....
    
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
   
})->name('users.update');

Route::post('users/save', function(Request $request){
  
    $data = $request->except('_token');
    
    $data = User::find($request->id);
    
    $data->update($request->all());

        return redirect()->route('users.index');
})->name('users.save');


Route::get('posts', function () {
    $posts = factory(Post::class, 10)
    ->make()
    ->toArray();
 
    return view('posts', [
        'posts' => $posts
    ]);
});

Route::post('users/delete/{id}', function($id){
    //....
    $user = User::find($id);
    $user->delete();

        return redirect()->route('users.index');
})->name('users.delete');

Route::post('users/store', function(Request $request ){
    
    $data = $request->all();
    $user = User::create([
        'name' => $data['name'],
        'email' =>$data['email'],
        'birthday'=> $data['birthday'],
        'password'=>$data['password'],
        'address'=>$data['address'],
    ]);
    
        return redirect()->route('users.index');
})->name('users.store');

Route::get('users/{id}', function ($id) {
    // $user= User::find($id);
    $user = User::find($id);
    return view('users/show',[
        $name = 'name' => $user['name'],
        $email= 'email' =>$user['email'],
        $birthday = 'birthday'=> $user['birthday'],
        $password = 'password'=>$user['password'],
        $address = 'address'=>$user['address'],
        $id ='id'=> $user['id'],
    ]);
})->name('users.show');

Route::get('posts', function () {
    
    $posts = Post::all();

    foreach ($posts as $post) {
        # code...
        $post->user;
    }
    $posts = $posts->toArray();
    return view('posts', [
        'posts' => $posts
            ]);
})->name('posts');

