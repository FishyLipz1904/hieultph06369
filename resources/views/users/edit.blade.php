@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('users.update')}}" method="POST">
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
   <div>
        <label>Name</label>
        <input type="text" name="name" value={{$name}} class='form-control'>
   </div>
   <input type="hidden" name="id" value={{$id}} class='form-control'>
   <div>
        <label>Birthday</label>
        <input type="text" name="birthday" value={{$birthday}} class='form-control'>
    </div>
    <div>
        <label>Phone number</label>
        <input type="text" name="phone_number" value={{$phone_number}} class='form-control'>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" value={{$email}} class='form-control'>
    </div>
    
    <div>
        <label>Password</label>
        <input type="password" name="password" value={{$password}} class='form-control'>
    </div>
    <div>
        <label>User status</label>
        <select name="is_active" id="is_active" class="form-control">
            @if($is_active==1)
             <option value="1">Active</option> 
             <option value="0">Deactive</option> 
            @elseif($is_active==0)
            <option value="0">Deactive</option> 
             <option value="1">Active</option> 
            @endif
        </select>
    </div>
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection