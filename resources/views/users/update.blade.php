@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <section class="content container-fluid">
<form action="{{ route ('users.save')}}" method="POST">
    @csrf
   <div>
            <label >Name</label>
         <input type="text" name="name" value={{$name}}>
   </div>
        <input type="hidden" name="id" value={{$id}}>
    <div>
         <label >Email</label>
        <input type="text"  name="email" value={{$email}}></div>
    <div>
        <label >Birthday</label>
             <input type="text" name="birthday" value={{$birthday}} >
    </div>
    <div>
        <label >Password</label>
             <input type="password" name="password" value={{$password}} >
    </div>
    <div>
        <label >Address</label>
             <input type="text" name="address" value={{$address}} >
    </div>
                 
    
    <input type="submit" value="submit">
    
    </form>


    </section>
    </div>



@endsection