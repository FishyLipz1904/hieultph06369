@extends('admin/adminlte/layouts')

@section('title', 'Starter')

@section('contents')
<!-- Code -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Các bài blogs
      </h1>
  
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    </section>
    <!-- /.content -->
<a href="{{ route('blogs.create') }}" class='btn btn-success'>Create</a>
    @if(empty($blogs))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
            <th>ID</th>
                <th>Title</th>
                <th>Images</th>
                <th>Content</th>
            </thead>
            <tbody>
            @foreach($blogs as $blogs)
                    <tr>
                    <td>{{$blogs['id']}}</td>
                    
                        <td><a href="#">{{ $blogs['title'] }}</a></td>
                        <td><a href="#"><img src="../images/{{$blogs['filename']}}" style='max-width:100px;max-height:100px' alt=""></a></td>
                        <td><a href="#">{{ $blogs['content'] }}</a></td>
                         
                        <td><a href="{{ route('blogs.edit', $blogs['id']) }}" class='btn btn-primary'>Update</a></td>
                        <td><form action="{{ route('blogs.delete', $blogs['id']) }}" method="POST">
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