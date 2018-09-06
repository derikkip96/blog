<?php $__env->startSection('content'); ?>

    <div class="col-md-8">
        <h1>signin</h1><hr>
        <form method="post" action="/login">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <label for="name">Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <?php echo $__env->make('partials.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="form-group">
            <button type="submit" class="btn btn-default">Login</button>
            </div>
        </form>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>