@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('users.store')}}" method="POST">
    @csrf
   <div>
            <label >Name</label>
         <input type="text" name="name" >
   </div>
    
    <div>
         <label >Email</label>
        <input type="text"  name="email"></div>
    <div>
        <label >Birthday</label>
             <input type="text" name="birthday" >
    </div>
    <div>
        <label >Password</label>
             <input type="password" name="password" >
    </div>
    <div>
        <label >Address</label>
             <input type="text" name="address" >
    </div>
                 
    
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection