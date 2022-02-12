<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <title>ReisCar</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>

<body>
    <div class="container-extend color-custom ">
        <nav class="navbar navbar-expand-sm bg-dark navbar-custom">
            <a href="<?php echo e(route('cars.index')); ?>" class="nav-link">
                <img class="text-custom navbar-brand mb-0 " src="/img/reiscarlogo2.png" alt="ReisLogo" width="500" height="150">
            </a>
            <button style="color:#daa520" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span>
                    <h1>Menu</h1>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="https://www.facebook.com/ReisCar-181321509206357" class="nav-link fa fa-facebook-square icons" style="font-size:50px"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/reiscar08/" class="nav-link fa fa-instagram icons" style="font-size:50px"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/ricardoreis1986" class="nav-link fa fa-facebook-square icons" style="font-size:50px"></a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/ricardoreis1986/" class="nav-link fa fa-instagram icons" style="font-size:50px"></a>
                    </li>
                    <li>
                        <a href="tel:+6494461709" class="nav-link fa fa-phone icons" style="font-size:50px"></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="flag-icon flag-icon-<?php echo e(Config::get('languages')[App::getLocale()]['flag-icon']); ?>"></span> <?php echo e(Config::get('languages')[App::getLocale()]['display']); ?>

                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php $__currentLoopData = Config::get('languages'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($lang != App::getLocale()): ?>
                            <a class="dropdown-item" href="<?php echo e(route('lang.switch', $lang)); ?>"><span class="flag-icon flag-icon-<?php echo e($language['flag-icon']); ?>"></span> <?php echo e($language['display']); ?></a>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>









        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light  shadow-sm">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                        </li>
                        <?php endif; ?>

                        <?php if(Route::has('register')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html><?php /**PATH C:\Users\henri\Desktop\reiscar1\resources\views/layouts/app.blade.php ENDPATH**/ ?>