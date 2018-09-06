<div class="blog-post">
    <a href="/post/{{$post->id}}" class="blog-post-title"> {{$post->title}}</a>

    <p> by {{$post->user->name}} on {{$post->created_at->toDayDateTimeString()}}</p>
    <p>{{$post->body}}</p>
</div><!-- /.blog-post -->


<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>
