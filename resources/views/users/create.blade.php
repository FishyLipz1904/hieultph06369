@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('users.store')}}" method="POST">
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
        <input type="text" name="name" class="form-control">
   </div>
   <div>
        <label>Birthday</label>
        <input type="text" name="birthday" class='form-control'>
    </div>
    <div>
        <label>Phone number</label>
        <input type="text" name="phone_number" class='form-control'>
    </div>
    <div>
        <label>Email</label>
        <input type="text" name="email" class='form-control'>
    </div>
    <div>
        <label>Role</label>
        <select name="role" id="" class='form-control'>
            <option value={{config('role.member')}}>Member</option>
            <option value={{config('role.admin')}}>Admin</option>
        </select>
    </div>
    
    <div>
        <label>Password</label>
        <input type="password" name="password" class='form-control'>
    </div>
    
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection