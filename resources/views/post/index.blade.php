@extends('layout.layout')
@section ('content')

                <div class="col-sm-8 blog-main">
                    @foreach($posts as $post)
                    @include('partials.posts')
                    @endforeach
                </div><!-- /.blog-main -->

@stop