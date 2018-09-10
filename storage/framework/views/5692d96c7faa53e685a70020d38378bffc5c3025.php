<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="/post/create">create</a>
            <a class="nav-link" href="/register">Register</a>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/logout">Logout</a>

            <?php if(Auth::check()): ?>
            <a class="nav-link ml-auto" href="#"><?php echo e(auth()->user()->name); ?></a>
            <?php endif; ?>
        </nav>
    </div>
</div>