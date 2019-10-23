@extends('layouts')

@section('title', 'Starter')

@section('contents')
<!-- Code -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Categories        <small>Optional description</small>
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
<a href="{{ route('categories.create') }}" class='btn btn-success'>Create</a>
    @if(empty($categories))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
            <th>ID</th>
                <th>Name</th>
                <th>Created by</th>
                <th>Features</th>
            </thead>
            <tbody>
            @foreach($categories as $categories)
                    <tr>
                    <td>{{$categories['id']}}</td>
                    
                        <td><a href="{{ route('categories.show', $categories['id']) }}">{{ $categories['name'] }}</a></td>
                        <td>{{$categories['user_id']}}</td> 
                        <td><a href="{{ route('categories.edit', $categories['id']) }}" class='btn btn-primary'>Update</a></td>
                        <td><form action="{{ route('categories.delete', $categories['id']) }}" method="POST">
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