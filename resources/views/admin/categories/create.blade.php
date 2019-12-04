@extends('admin/adminlte/layouts')
@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('categories.store')}}" method="POST">
    @csrf
    
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <h2>Create a new category</h2>
   <div>
    
        <label>Category Name</label>
        <input type="text" name="name">
        <input type="hidden" name="auth_id" value={{Auth::id()}}>
   </div>
   
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection