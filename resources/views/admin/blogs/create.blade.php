@extends('admin/adminlte/layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
    <form action="{{route('blogs.store')}}" method="post" enctype='multipart/form-data'>
    @csrf
    <h2>Create a new blogs</h2>
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
        <input type="text" name="title" id="" class="form-control" placeholder="Title">
        <label>Content</label>
        <textarea name="content" id="" cols="30" rows="10" class='form-control'></textarea>
        
        <label>Image</label>
        <input type="file" name="filename" id="">
        
   </div>
   
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection