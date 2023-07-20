@extends('layuot.layout')

@section('content')
    <div class="col-lg-8 mb-4">
        <!-- Contact Form -->
        <h3>Update Post</h3>
        <form action="{{ route('home.updatee',$news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- @method('PUT') --}}
            <div class="control-group form-group">
                <div class="controls">
                    <label>Title :</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}">
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
                    <input type="text" class="form-control" id="description" name="description"
                    value="{{ $news->description }}">
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
                    <input type="file" class="form-control" id="image" name="image"
                    value="{{ asset('uploads/'.$news->image) }}">
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
