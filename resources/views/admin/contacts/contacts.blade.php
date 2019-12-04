@extends('admin/adminlte/layouts')

@section('title', 'Starter')

@section('contents')
<!-- Code -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Phản hồi và yêu cầu cộng tác của người dùng
      </h1>
  
    </section>

    <!-- Main content -->
   
    <!-- /.content -->
    @if(empty($contacts))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
            <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </thead>
            <tbody>
            @foreach($contacts as $contacts)
                    <tr>
                    <td>{{$contacts['id']}}</td>
                    
                        <td><a href="#">{{ $contacts['name'] }}</a></td>
                        <td><a href="#">{{ $contacts['email'] }}</a></td>
                        <td><a href="#">{{ $contacts['subject'] }}</a></td>
                        <td><a href="#">{{ $contacts['message'] }}</a></td>
                        <td><form action="{{route('contacts.delete',$contacts['id'])}}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class='btn btn-danger'>
                        </form></td>
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
  </div>
  <!-- /.content-wrapper -->
@endsection