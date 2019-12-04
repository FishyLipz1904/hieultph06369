@extends('admin/adminlte/layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('posts.update')}}" method="POST">
    @csrf
    POSTS
    @if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
   <div>
        <label>Title</label>
        <input type="text" name="title" class="form-control" value={{$title}}>
   </div>
    <input type="hidden" name="user_id" value={{Auth::id()}}>
    <input type="hidden" name="id" value={{$id}}>
    <div>
        <label>Content</label>
        <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$content}}</textarea>
    </div>
    <div>
        <label>Category</label>
        <select name="category_id" id="category_id" class="form-control">
            <option value={{$category_id}}>{{$category_name}}</option> 
           @foreach($categories as $category)
                <option value={{$category['id']}}>{{$category['name']}}</option>   
           @endforeach
        </select>
    </div>
    
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>

 

@endsection