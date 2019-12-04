@extends('admin/adminlte/layouts')

@section('title', 'Comments Manager')

@section('contents')
<!-- Code -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
Comments        <small>Optional description</small>
      </h1>
   
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    </section>
    <!-- /.content -->
<a href="{{ route('comments.create') }}" class='btn btn-success'>Create</a>
    @if(empty($comments))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
            <th>ID</th>
                <th>At Post</th>
                <th>Content</th>
                <th>Commented By</th>
                <th>Active Status</th>
                <th>Features</th>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                        <tr>
                            <td>{{ $comment['id'] }}</td>
                            <td>{{ $comment['post_id'] }}</td>
                            <td><a href="{{route('comments.show',$comment['id'])}}">{{ $comment['content'] }}</a></td>
                            <td>{{ $comment['user_id'] }}</td>
                            <td>{{ $comment['is_active'] }}</td>
                            <td><a href="{{ route('comments.edit', $comment['id']) }}" class='btn btn-primary'>Update</a></td>
                            <td>
                              <form action="{{route('comments.delete', $comment['id'])}}" method="POST">
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