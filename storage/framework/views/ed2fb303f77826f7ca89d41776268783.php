<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $__env->yieldContent('title'); ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="css/styles.css">

    <?php echo $__env->yieldContent("head-tags"); ?>
    <style>
        ul li{
            list-style-type: none;
        }
        .main-nav .top-nav button[type="button"]{
            outline: none!important;
            border: none!important;
        } 
        button[type="button"] span.icon-bar::after{
            content: " ";
            width: 8px;
            height: 2px;
            background: #333333;
        }
        @media screen and (max-width: 607px){
            .top-nav .navbar-nav{
                display: flex!important;
            }
        }
    </style>
</head>
<body>
    
    <header class="">
        <div class="top-nav">
            <nav class="navbar navbar-dark bg-primary border-bottom border-white navbar-expand-md">
                <div class="container-xl">
                    <ul class="navbar-brand d-flex align-items-center my-auto ps-0">
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-instagram color-dark"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link px-3"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link"><i class="fa-brands fa-twitter color-primary"></i></a>
                        </li>
                    </ul>
                    <!-- toogle btn for mobile -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#top-nav" arial-controls="main-nav" arial-expan="false" arial-lebel="toggle-navigation">
                        <span class="navbar-toggler-icon"></span>
                        
                    </button>
                    
                        <!-- navbar links  -->
                        <div class="collapse navbar-collapse align-center justify-content-end" id="top-nav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Check Admission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Application Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">Course Registration</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
        </div>
        <div class="main-nav" >
            <nav class="navbar  sticky-top navbar-expand-md navbar-dark bg-primary">
                    <div class="container-xl">
                        <a href="/" class="navbar-brand">
                            <img src="<?php echo e(asset("img/logo.png")); ?>" alt="" class="img-fluid" style="width: 60px">
                        </a>
                        
                        <!-- toogle btn for mobile -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" arial-controls="main-nav" arial-expan="false" arial-lebel="toggle-navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <!-- navbar links  -->
                        <div class="collapse navbar-collapse align-center justify-content-end " id="main-nav">
                            <ul class="navbar-nav gap-md-5 align-items-center">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Admission</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Application Form</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">E-learning</a>
                                </li>
                                <?php if(auth()->guard('student')->check()): ?>
                                    <li class="nav-item">
                                        <a href="" class=" d-none d-md-inline">
                                            <form action="<?php echo e(route('student.logout')); ?>" method="POST"> <?php echo csrf_field(); ?> <?php echo method_field("DELETE"); ?> <button class="btn btn-outline-info">Logout</button></form>    
                                        </a>
                                    </li>
                                    <?php else: ?>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('student.login')); ?>" class="btn btn-outline-info d-none d-md-inline"><span class="px-2">Login</span></a>
                                    </li>
                                <?php endif; ?>
                                <?php if(auth()->guard('student')->check()): ?>
                                    <li class="nav-item d-md-none ">
                                        <a href=" <?php echo e(url('/login')); ?>" >
                                             <form action="<?php echo e(route('student.logout')); ?>" method="POST"> <?php echo csrf_field(); ?> <?php echo method_field("DELETE"); ?> <button class="nav-link">Logout</button></form>   
                                        </a>
                                    </li>

                                <?php else: ?>
                                    <li class="nav-item d-md-none ">
                                        <a href=" <?php echo e(url('/login')); ?>" class="nav-link">Login</a>
                                    </li>
                                <?php endif; ?>
                                
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            
    </header>

    
    <?php echo $__env->yieldContent('content'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\Users\Peter Bette\Documents\LARAVEL\school\school\resources\views/layouts/layout.blade.php ENDPATH**/ ?>