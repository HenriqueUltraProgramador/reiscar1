

<?php $__env->startSection('content'); ?>

<body class="backgound-cars-tela">
  <section class="d-flex justify-content-center align-items-center h-100 min-vh-100">
    <div class="container backgound-cars-tela">
      <div class="row gy-4">
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-4">
          <div class="card bgxs-tela h-100 d-flex p-2 flex-column">
            <div class="card-body ">
              <img class="img-fluid card-img-top cars-img" src="<?php echo e($car['image']); ?>">
              <p class="card-text">
              <h3><?php echo e($car['brand']); ?> <?php echo e($car['model']); ?></h3>
              </p>
              <p>
              <h5>Estado: <span class="badge rounded-pill bg-dark"><?php echo e($car['state']); ?></span>
              </h5>
              </p>
              <p> <?php echo e(\Illuminate\Support\Str::limit($car['description'], $limit = 300, $end = '...')); ?> </p>
              <p class="card-text">
              <h4 class="text-end"><?php echo e($car['price']); ?>€</h4>
              </p>
              <a href="<?php echo e(route('cars.show', ['id' => $car['id']])); ?>">
                <button class="btn btn-block btn-outline-primary backgound-cars-tela">Ver mais</button>
              </a>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
</body>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\henri\Desktop\reiscar1\resources\views/cars/index.blade.php ENDPATH**/ ?>