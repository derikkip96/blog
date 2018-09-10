@extends('layout.layout')

@section('content')

    <div class="col-sm-8 blog-main">
        <h2>create post</h2>
        <form method="post" action="{{route('post.update', $post->id)}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="text" name="title" value="{{$post->title}}" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control"  required>{{$post->body}}</textarea>
            </div>
            @include('partials.errors')
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@stop
