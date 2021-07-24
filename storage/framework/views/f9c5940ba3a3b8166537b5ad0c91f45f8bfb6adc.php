<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('Info Hub', 'Info Hub')); ?></title>

    <!-- Scripts -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/toastr.min.js')); ?>"></script>
    <!-- <script>

        <?php if(Session:: has('success')): ?>

        toastr.success(<?php echo e(Session:: get('success')); ?>)


        <?php endif; ?>

        <?php if(Session:: has('info')): ?>

        toastr.info("<?php echo e(Session::get('info')); ?>")


        <?php endif; ?>
    </script> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- Fonts -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->


    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/about.css"> 
    <link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
    <link href="<?php echo e(asset('css/app2.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/toastr.min.css')); ?>">
</head>

<body>
<div  style="background-image:url(images/backgroundapp.jpg);">
    <div id="app">
        <?php echo $__env->make('partial.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="container">
            <div class="row">
                <?php if(Auth::check()): ?>

                <div class="col-sm-3">


                    <div class="list-group">
                        <a href="<?php echo e(route('home')); ?>" class="list-group-item active">Home</a>
                        <a href="<?php echo e(route('pro')); ?>" class="list-group-item">View Profile</a>
                        <a href="<?php echo e(route('post.create')); ?>" class="list-group-item">Create new post</a>
                        <a href="<?php echo e(route('category.create')); ?>" class="list-group-item">Create new Categories</a>
                        <a href="<?php echo e(route('file.create')); ?>" class="list-group-item">Upload File</a>
                        <a href="<?php echo e(route('dept.show')); ?>" class="list-group-item">Department</a>
                    </div>

                </div>

                <?php endif; ?>
                <div class="col-sm-6">


                    <?php echo $__env->yieldContent('content'); ?>

                </div>
                <?php if(Auth::check()): ?> 
                <div class="col-sm-3" style="padding-right: -30px;">

                    <div class="list-group">

                        <a href="<?php echo e(route('pro')); ?>" class="list-group-item active ">Top Users</a>
                        <?php $user_info = DB::table('users')->select('name','points')->orderBy('points','DESC')->limit(5)->get(); ?>
    
    
                        <?php foreach($user_info as $user) { ?>
    
                        <a href="" class="list-group-item "><?php echo e($user->name); ?> (<?php echo e($user->points); ?>)</a>
    
                        <?php }  ?>
                        </div>
                                               
                    <?php $user_info = Auth::User() ?>
                    <?php if( $user_info->role=="TEACHER") { ?>
                    <div class="list-group">
                        <a href="<?php echo e(route('categories')); ?>" class="list-group-item">View Categories</a>
                        <a href="<?php echo e(route('dept.add')); ?>" class="list-group-item">Add Department</a>
                        <a href="<?php echo e(route('session.add')); ?>" class="list-group-item">Add Session</a>
                        <a href="<?php echo e(route('semester.add')); ?>" class="list-group-item">Add Semester</a>
                        <a href="<?php echo e(route('course.add')); ?>" class="list-group-item">Add Course</a>
                    </div>

                    <?php  } ?>
                    <?php endif; ?>
                   

                </div>

                <div>

                </div>
            </div>
        </div>



    </div>
     <!-- Footer -->

     <footer class="footer">
        <div class="footer_background" style="background-image:url(images/footerBackground.jpg);"></div>
        <div class="container">
            <div class="row footer_row">
                <div class="col">
                    <div class="footer_content">
                        <div class="row">

                            <div class="col-lg-3 footer_col">
                    
                                <!-- Footer About -->
                                <div class="footer_section footer_about">
                                    <div class="footer_logo_container">
                                        <a href="#">
                                            <div class="footer_logo_text">Info <span>Hub</span></div>
                                        </a>
                                    </div>
                                    <div class="footer_about_text">
                                        <p></p>
                                    </div>
                                    <div class="footer_social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="col-lg-3 footer_col">
                    
                                <!-- Footer Contact -->
                                <div class="footer_section footer_contact">
                                    <div class="footer_title">Contact Us</div>
                                    <div class="footer_contact_info">
                                        <ul>
                                            <li>Email: adress@gmail.com</li>
                                            <li>Phone:  +(88) 017 xxx xxx</li>
                                            <li>Surma R/A, Akhalia, Sylhet City, Bangladesh</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="col-lg-3 footer_col">
                    
                                <!-- Footer links 
                                <div class="footer_section footer_links">
                                    <div class="footer_title">Contact Us</div>
                                    <div class="footer_links_container">
                                        <ul>
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="#">Features</a></li>
                                            <li><a href="courses.html">Courses</a></li>
                                            <li><a href="#">Events</a></li>
                                            <li><a href="#">Gallery</a></li>
                                            <li><a href="#">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

</div>
</body>

</html><?php /**PATH C:\xampp\htdocs\SUST-Archive-master\resources\views/layouts/app.blade.php ENDPATH**/ ?>