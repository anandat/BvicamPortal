<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">BVICAM Attendance Portal</a>
        </div>
        <?php /* <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li> */ ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!Auth::guard('admin')->check() && !Auth::guard('student')->check()&& !Auth::guard('faculty')->check()): ?>
                    <li><a href="/student">Student Login</a></li>
                    <li><a href="/admin">Admin Login</a></li>
                    <li><a href="/faculty">Faculty Login</a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(Request::segment(1)); ?>/logout">Logout</a></li>
                <?php endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
