@extends('admin/adminlte/layouts')

@section('title', 'User Dashboard')

@section('contents')
<!-- Code -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    </section>
    <!-- /.content -->
    @if(empty($users))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
            <th>ID</th>
                <th>Name</th>
                <th>Phone number</th>
               
                <th>Email</th>
                <th>Posts</th>
                <th>Categories</th>
                <th>Comments</th>
                <th>Role</th>
                <th>Active Status</th>
                <th>Features</th>
            </thead>
            <tbody>
                @foreach($users as $users)
                    <tr>
                    <td>{{$users['id']}}</td>
                        <td><a href="#">{{ $users['name'] }}</a></td>
                        <td>{{ $users['phone_number'] }}</td>
                       
                        <td>{{ $users['email'] }}</td>
                        <td>{{ count($users['posts'])}}</td>
                        <td>{{ count($users['categories'])}}</td>
                        <td>{{ count($users['comments'])}}</td>
                        <td>{{ $users['role'] }}</td>
                        <td>{{ $users['is_active'] }}</td>
                        <td><a href="{{ route('users.edit', $users['id']) }}" class='btn btn-primary'>Update</a></td>
                        <!-- <td><form action="{{ route('users.delete', $users['id']) }}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class='btn btn-danger'>
                        </form></td> -->
                    
                        
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
  </div>
  <!-- /.content-wrapper -->
@endsection