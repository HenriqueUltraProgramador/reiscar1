

<?php $__env->startSection('content'); ?>


<div class="container-extend navbar-custom">
  <div class="row ">
    <div class="col-xs-12 ">
      <div class="card navbar-custom">
        <div class="card-body navbar-custom">
          <img class="img-fluid card-img-top " src="<?php echo e($car['image']); ?>">

          <p class="card-text">
          <h1><?php echo e($car['brand']); ?> <?php echo e($car['model']); ?></h1>
          </p>

          <p>
          <h4>Estado: <span class="badge rounded-pill bg-dark"><?php echo e($car['state']); ?></span>
          </h4>
          </p>

          <p> <?php echo e($car['description']); ?> </p>

          <p class="card-text">
          <h1 class="text-end"><?php echo e($car['price']); ?>€</h1>
          </p>

          <a href="<?php echo e(route('cars.index')); ?> ">
            <button class="btn btn-block btn-outline-secondary">Voltar</button>
          </a>

        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\henri\Desktop\reiscar1\resources\views/cars/show.blade.php ENDPATH**/ ?>