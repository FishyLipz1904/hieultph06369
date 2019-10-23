@extends('layouts')

@section('contents')
<div class="content-wrapper">
    <input type="hidden" name="id" value={{$id}}>
   <div>
   
            <label >Name</label>
         <p>{{$name}}</p>
   </div>
    
    <div>
         <label >Email</label>
        <p>{{$email}}</p>
    <div>
        <label >Birthday</label>
             <p>{{$birthday}}</p>
    </div>
    <div>
        <label >Address</label>
             <p>{{$address}}</p>
    </div>
    </form>


    </section>
    </div>



@endsection