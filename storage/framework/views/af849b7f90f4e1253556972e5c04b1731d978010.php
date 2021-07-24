<nav class="navbar navbar-default navbar-static-top ">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <?php echo e(config('Info Hub', 'Info Hub')); ?>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav">
                <form class="form-inline" method="GET" action="/result">
                    <input class="form-control" name="query" typein="text" placeholder="Search Files...."> &nbsp;
                    <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
            </ul>

                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                <li><a href="<?php echo e(url('/register')); ?>">Register</a></li>
                <?php else: ?>
                <li><a href="<?php echo e(url('/register')); ?>"></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-bell" ></i>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                        <a href = "#">Notify</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo e(url('/logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav><?php /**PATH C:\xampp\htdocs\SUST-Archive-master\resources\views/partial/navbar.blade.php ENDPATH**/ ?>