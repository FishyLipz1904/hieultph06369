<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
// use App\Http\Controllers\Auth;
use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\UpdateRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class CategoryController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {
        $categories = Category::all();

        foreach ($categories as $category){
            $category->posts;
            $category->comments;
            
        }
        
    return view('categories/categories', [
        'categories' => $categories->toArray(), 
        
        ]);
    
    }
    public function create()
    {
        return view('categories/create');
    }
    public function store(CreateRequest $request)
    {
        $data = $request->all();
        
        $category = Category::create([
            'name' => $data['name'],
            'user_id'=>$data['auth_id'],
            
        ]);
        return redirect()->route('categories.index');
    }
    public function destroy(Request $request, $id)
    {
        $categories = Category::find($id);
        
        $categories->delete();

        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $data = Category::find($id);
        
        return view('categories/edit',[
            $name= 'name'=>$data['name'],
            $id= 'id'=>$data['id'],
        ]);
    }
     public function update(UpdateRequest $request)
    {
        $data = $request->except('_token');
        
        $data = Category::find($request->id);
       
        $data->update($request->all());
    
            return redirect()->route('categories.index');
    }
    public function show($id)
    {

        $categories = Category::all();
        // $users = User::all();
        // foreach ($categories as $categories){
        //     $categories->posts;
        //     $categories->comments;
            
        // }
      
        $data = Category::find($id);
        return view('categories/show',[
            $name = 'name' => $data['name'],
            $user_id= 'user_id' =>$data['user_id'],
            $id ='id'=> $data['id'],
        ]);
    }
}
  //cate đã xong thêm, xóa, update,show V Done