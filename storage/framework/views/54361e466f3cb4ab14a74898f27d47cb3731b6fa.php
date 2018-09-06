<div class="blog-post">
    <a href="/post/<?php echo e($post->id); ?>" class="blog-post-title"> <?php echo e($post->title); ?></a>

    <p> by <?php echo e($post->user->name); ?> on <?php echo e($post->created_at->toDayDateTimeString()); ?></p>
    <p><?php echo e($post->body); ?></p>
</div><!-- /.blog-post -->


<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>
