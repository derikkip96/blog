<?php $__env->startSection('content'); ?>
    <div class="col-sm-8 blog-main">
    <div class="blog-post">
        <a href="/" class="blog-post-title"> <?php echo e($post->title); ?></a>

        <p> by <?php echo e($post->user->name); ?>  on <?php echo e($post->created_at->toDayDateTimeString()); ?></p>
        <p><?php echo e($post->body); ?></p>

        
        <div class="comment">
            <ul class="list-group">
                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <strong>
                            <?php echo e($comment->created_at->diffForHumans()); ?>:&nbsp;
                        </strong>
                        <?php echo e($comment->body); ?>

                    </li>


                    <div class="form-group">
                        <a href="<?php echo e(route('post.delete', $post->id)); ?>"
                           onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                            <i class="os-icon os-icon-signs-11"></i>
                            <span>delete</span>
                        </a>
                        <form id="delete-form" action="<?php echo e(route('post.delete', $post->id)); ?>" method="POST"
                              style="display: none;">
                            <input type="hidden" name="_method" value="DELETE">
                            <?php echo e(csrf_field()); ?>

                        </form>

                    </div>
                    <div class="form-group">
                        <a class="btn btn-primary" type="submit" href="<?php echo e(route('post.edit', $post->id)); ?>" >edit</a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            
            <br>
            <div class="card">
                <div class="card-block">
                    <form method="post" action="/posts/<?php echo e($post->id); ?>/comments">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <input class="form-control" type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="body" placeholder="your comment here"  class="form-control"></textarea>
                        </div>
                        <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <div class="form-group">
                           <button class="btn btn-primary" type="submit">Add comment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.blog-post -->
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>