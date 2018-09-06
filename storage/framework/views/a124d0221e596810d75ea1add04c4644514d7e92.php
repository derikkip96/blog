<?php $__env->startSection('content'); ?>

    <div class="col-sm-8 blog-main">
        <h2>create post</h2>
        <form method="post" action="/posts">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="text" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control" required></textarea>
            </div>
           <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>