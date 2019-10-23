@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('categories.update')}}" method="POST">
    @csrf
    <h2>Edit the category</h2>
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
        <label>Category Name</label>
        <input type="text" name="name" value={{$name}}>
        <input type="hidden" name="auth_id" value={{Auth::id()}}>
        <input type="hidden" name="id" value={{$id}}>
   </div>
   
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection