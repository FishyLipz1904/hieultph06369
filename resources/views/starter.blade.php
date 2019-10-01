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

      <!--------------------------
        | Your Page Content Here |
        -------------------------->

    </section>
    <!-- /.content -->

    @if(empty($posts))
        <p>No Data</p>
    @else
        <table class="table">
            <thead>
                <th>User ID</th>
                <th>Content</th>
                <th>Like</th>
            </thead>
            <tbody>
                @foreach($posts as $posts)
                    <tr>
                        <td>{{ $posts['user_id'] }}</td>
                        <td>{{ $posts['content'] }}</td>
                        <td>{{ $posts['like'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
  </div>
  <!-- /.content-wrapper -->
@endsection