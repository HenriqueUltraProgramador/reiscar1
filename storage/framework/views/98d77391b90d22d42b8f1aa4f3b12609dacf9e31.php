<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="<?php echo e(asset('js/app.js')); ?>"></script>
  <title>ReisCar</title>
</head>

<body>
  <div class="container-extend ">
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
        </ul>
      </div>
    </nav>

    <!--CARROSEEEEEL-->

    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if( $car['image']): ?>
        <div class="carousel-item <?php echo e($key == 0 ? 'active' : ''); ?>">
          <img src="<?php echo e($car['image']); ?>" class="d-block w-100 carousel-car-img" alt="reiscar - carro">
          <div class="carousel-caption d-none d-md-block ">
            <h1 class="text-carros"> <?php echo e($car['brand']); ?> <?php echo e($car['model']); ?> </h1>
            <h2 class="text-carros"> <?php echo e($car['price']); ?> €</h2>
          </div>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


      </div>
      <button class=" carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</body>

</html><?php /**PATH C:\Users\henri\Desktop\reiscar1\resources\views/welcome.blade.php ENDPATH**/ ?>