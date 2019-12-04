@extends('admin/adminlte/layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('comments.update')}}" method="POST">
    @csrf
    <h2>Update a comment</h2>
   <div>
       
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
        <label>Content</label>
        <textarea name="content" id="" cols="30" rows="10" class='form-control'>{{$content}}</textarea>
        <input type="hidden" name="auth_id" value={{Auth::id()}}>
        <input type="hidden" name="id" value={{$id}}>
        <label>At post</label>
        <select name="post_id" id="post_id" class="form-control">
            <option value={{$post_id}}>{{$post_name}}</option> 
           @foreach($posts as $posts)
                <option value={{$posts['id']}}>{{$posts['title']}}</option>   
           @endforeach
        </select>
        
        <input type="hidden" name="is_active" value='1'>
   </div>
   
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection