<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>

            <?php if(Auth::check()): ?>
            <a class="nav-link ml-auto" href="#"><?php echo e(auth()->user()->name); ?></a>
            <?php endif; ?>
        </nav>
    </div>
</div>