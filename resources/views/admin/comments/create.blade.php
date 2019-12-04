@extends('admin/adminlte/layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('comments.store')}}" method="POST">
    @csrf
    <h2>Create a new comment</h2>
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
    
        <label>Content</label>
        <textarea name="content" id="" cols="30" rows="10" class='form-control'></textarea>
        <input type="hidden" name="auth_id" value={{Auth::id()}}>
        <label>At post</label>
        <select name="post_id" id="post_id" class="form-control">
           @foreach($posts as $posts)
                <option value={{$posts['id']}}>{{$posts['title']}}</option> 
           @endforeach
        </select>
   </div>
   
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection