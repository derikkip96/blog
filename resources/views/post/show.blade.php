@extends('layout.layout')

@section('content')
    <div class="col-sm-8 blog-main">
    <div class="blog-post">
        <a href="/" class="blog-post-title"> {{$post->title}}</a>

        <p> by {{$post->user->name}}  on {{$post->created_at->toDayDateTimeString()}}</p>
        <p>{{$post->body}}</p>

        {{--comment section--}}
        <div class="comment">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li>
                        <strong>
                            {{$comment->created_at->diffForHumans()}}:&nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
            {{--add comment--}}
            <br>
            <div class="card">
                <div class="card-block">
                    <form method="post" action="/posts/{{$post->id}}/comments">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="hidden" name="post_id" value="{{$post->id}}">
                        </div>
                        <div class="form-group">
                            <textarea name="body" placeholder="your comment here"  class="form-control"></textarea>
                        </div>
                        @include('partials.errors')
                        <div class="form-group">
                           <button class="btn btn-primary" type="submit">Add comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.blog-post -->
    </div>

@stop