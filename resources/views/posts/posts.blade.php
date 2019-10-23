@extends('layouts')

@section('title', 'Danh sách bài viết')

@section('contents')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Danh sách bài viết
                <small>Danh sách bài viết</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            @if(empty($posts))
                <p>No data</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Created by</th>
                        <th>At Category</th>
                        <th>Feature</th>
                        <th><a href="{{route('posts.create')}}" class='btn btn-success'>Create</a></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post['id'] }}</td>
                            <td><a href="{{ route('posts.show', $post['id']) }}">{{ $post['title'] }}</a></td>
                            <td>{{ $post['content'] }}</td>
                            <td>{{ $post['users']['name'] }}</td>
                            <td>{{ $post['category_id'] }}</td>
                            <td><a href="{{ route('posts.edit', $post['id']) }}" class='btn btn-primary'>Update</a></td>
                            <td><form action="{{ route('posts.delete', $post['id']) }}" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class='btn btn-danger'>
                        </form></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

        </section>
        <!-- /.content -->
    </div>
@endsection
