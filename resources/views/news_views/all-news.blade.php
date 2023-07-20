@extends('layuot.layout')
@section('content')
    <body>
        <!-- Page Content -->
        <div class="container">

            <!-- Page Heading/Breadcrumbs -->
            <h1 class="mt-4 mb-3">Portfolio 1
                <small>Subheading</small>
            </h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">Portfolio 1</li>
            </ol>

            <!-- news title One -->
            @foreach ($news as $new)
                <div class="row">
                    <div class="col-md-7">
                        <a href="{{ route('home.newsdetailes') }}">
                            <img class="img-fluid full-width h-200 rounded mb-3 mb-md-0" src="{{ asset('uploads/'.$new['image_path']) }}"
                                alt="">
                        </a>
                    </div>
                    <div class="col-md-5">
                        <h3>{{ $new['title'] }}</h3>
                        <p>{{ $new['description'] }}</p>
                        <a class="btn btn-primary" href="{{ route('home.show',$new->id) }}">View news title
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
                <!-- /.row -->

                <hr>
            @endforeach


        </div>
        <!-- /.container -->


    </body>
@endsection
