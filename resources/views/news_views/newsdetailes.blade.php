@extends('layuot.layout')
@section('content')

    <body>
        <!-- Page Content -->
        <div class="container">
            <h1 class="mt-4 mb-3">{{ $new->title }}
            </h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item active">news deatiles</li>
            </ol>
            <div class="row">
                <!-- Post Content Column -->
                <div class="col-lg-8">

                    <!-- Preview Image -->
                    <img class="img-fluid rounded" src="{{ asset('uploads/' . $new->image_path) }}" alt="">
                    <hr>
                    <!-- Date/Time -->
                    <p>Posted on {{ $new->created_at }}</p>
                    <hr>
                    <!-- Post Content -->
                    <p class="lead">{{ $new->description }}</p>
                    <hr>
                    <a class="btn btn-primary" href="{{ route('home.update', $new->id) }}">Update Post <span
                            class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <a class="btn btn-primary" href="{{ route('home.destroy', $new->id) }}">destroy Post <span
                            class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                    <!-- Comments Form -->
                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form action="{{ route('home.comment',$new->id) }}" method="POST">
                                @csrf
                                <div class="control-group form-group">
                                    <div class="controls">
                                        <label>Name :</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                @error('name')
                                    <div class="form-error">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <div class="form-group">
                                    <label>Comment :</label>
                                    <textarea class="form-control" rows="3" name="comment"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Comment</button>
                            </form>
                        </div>
                    </div>

                    <!-- Single Comment -->
                    @foreach ($com as $comm)
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $comm->name }}</h5>
                              <p>
                                    {{ $comm->comment }}
                              </p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Sidebar Widgets Column -->
                <div class="col-md-4">

                    <!-- Side Widget -->
                    <div class="card my-4">
                        <h5 class="card-header">Side Widget</h5>
                        <div class="card-body">
                            You can put anything you want inside of these side widgets. They are easy to use, and feature
                            the new Bootstrap 4 card containers!
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div>
    </body>
@endsection
