
<?php $__env->startSection('content'); ?>



<body>

  <div class="container mt-3">
  <h2>Hospital List</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Hospital name</th>
        <th>Hospital Location</th>
        <th>Contact</th>
      </tr>
    </thead>

    <tbody>
    <?php $__currentLoopData = $hospital; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e($row['name']); ?></td>
        <td><?php echo e($row['location']); ?></td>
        <td><?php echo e($row['contact']); ?></td>
        <td>
          <form action="addhospital" method="post">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="hospitalid" value="<?php echo e($row['id']); ?>">
          <button class="btn btn-success" type="submit">Confirm</button>
          </form>
        
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>



    
  </div>



</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\backup 23\ambulancebooking\resources\views/hospitallist.blade.php ENDPATH**/ ?>