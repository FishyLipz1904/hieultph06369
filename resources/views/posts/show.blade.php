@extends('layouts')

@section('contents')
<div class="content-wrapper">
    
   <div>
        <label >Title</label>
         <p>{{$title}}</p>
   </div>
   <div>
         <label>Content</label>
        <p>{{$content}}</p>
    <div>
        <label >User ID</label>
             <p>{{$user_id}}</p>
    </div>
    <div>
        <label >Category ID</label>
             <p>{{$category_id}}</p>
    </div>
    <div>
        <label >Category name</label>
             <p>{{$category_name}}</p>
    </div>
    </section>
    </div>



@endsection