@extends('layuot.layout')

@section('content')
    <div class="col-lg-8 mb-4">
        <!-- Contact Form -->

        <h3>Ddd new Post</h3>
        <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="control-group form-group">
                <div class="controls">
                    <label>Title :</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <p class="help-block"></p>
                </div>
            </div>
            @error('title')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
            <div class="control-group form-group">
                <div class="controls">
                    <label>description :</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
            </div>
            @error('description')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
            <div class="control-group form-group">
                <div class="controls">
                    <label>Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
            </div>
            @error('image')
                <div class="form-error">
                    {{ $message }}
                </div>
            @enderror
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Send Post</button>

        </form>
    </div>
@endsection
