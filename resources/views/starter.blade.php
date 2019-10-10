@extends('layouts')

@section('title', 'Starter')

@section('contents')
<!-- Code -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    </section>
    <!-- /.content -->
<a href="{{route('users.create')}}" class='btn btn-success'>Create</a>
    @if(empty($users))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
            <th>ID</th>
                <th>Name</th>
                <th>Birthday</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Features</th>
            </thead>
            <tbody>
                @foreach($users as $users)
                    <tr>
                    <td>{{$users['id']}}</td>
                        <td><a href="{{ route('users.show', $users['id']) }}">{{ $users['name'] }}</a></td>
                        <td>{{ $users['birthday'] }}</td>
                        <td>{{ $users['email'] }}</td>
                       
                        <td>{{ $users['address'] }}</td>
                        <td><a href="{{ route('users.update', $users['id']) }}" class='btn btn-primary'>Update</a></td>
                        <td><form action="{{ route('users.delete', $users['id']) }}" method="POST">
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