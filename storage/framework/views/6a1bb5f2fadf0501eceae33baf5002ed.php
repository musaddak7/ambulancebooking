
<?php $__env->startSection('content'); ?>
<body>
  <div class="container">
    <h1>Ambulance Types</h1>


    <?php $__currentLoopData = $ambocat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <ul class="list-group">
      <li class="list-group-item">
        <h4>Model Name : <?php echo e($item->cab_model); ?></h4>
        <h6>Category : <?php echo e($item->ambocat); ?></h6>
        <hr>
        <p><?php echo e($item->description); ?></p>
        <button type="button" class="btn btn-primary btn-sm">Confirm</button>
       
      </li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
  </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\backup 23\ambulancebooking\resources\views/searchcat.blade.php ENDPATH**/ ?>