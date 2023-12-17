
<?php $__env->startSection('content'); ?>


<body>
  <div class="container">
    <h1>Ambulance Types</h1>


    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <ul class="list-group">
      <li class="list-group-item">

      <form action="/bookingambulance" type="get">
        <h4>Model Name : <?php echo e($row->cab_model); ?></h4>
        <h6>Category : <?php echo e($row->ambocat); ?></h6>
        <hr>
        <p><?php echo e($row->description); ?></p>
        <div class="" style="float:right"><button type="submit" class="btn btn-primary btn-sm">Confirm</button></div>
        

        </form>
       
      </li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
  </div>

</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\backup 23\ambulancebooking\resources\views/cab_available.blade.php ENDPATH**/ ?>