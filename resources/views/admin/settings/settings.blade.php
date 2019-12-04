@extends('admin/adminlte/layouts')

@section('title', 'Settings')

@section('contents')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Settings Website
              
            </h1>
     
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            @if(empty($settings))
                <p>No data</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        
                        <th>about_us</th>
                        <th>contact</th>
                        <th>email</th>
                        <th>address</th>
                        <th>slogan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($settings as $settings)
                        <tr>
                            <td>{{ $settings['about_us'] }}</td>
                            <td>{{ $settings['contact']}}</td>
                            <td>{{ $settings['email'] }}</td>
                            <td>{{ $settings['address'] }}</td>
                            <td>{{ $settings['slogan'] }}</td>
                            
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif

        </section>
        <!-- /.content -->
    </div>
@endsection
