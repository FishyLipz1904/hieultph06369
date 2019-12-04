@extends('admin/adminlte/layouts')
@section('contents')
<div class="content-wrapper">
    <input type="hidden" name="id" value={{$id}}>
   <div>
        <label >Created By</label>
         <p>{{$user_id}}</p>
   </div>
    
    <div>
         <label >Category Name</label>
        <p>{{$name}}</p>

    </form>


    </section>
    </div>



@endsection