
<?php $__env->startSection('content'); ?>
<body>
  <div class="container">

<form action="userregister" class="was-validated" method="POST">
  <?php echo csrf_field(); ?>
  <div class="mb-3 mt-3">

  <label class="form-label">First Name:</label>
  <input type="text" name="firstname"  class="form-control" placeholder="Enter First Name" required>

  <label class="form-label">Last Name:</label>
  <input type="text" name="lastname"  class="form-control"  placeholder="Enter Last Name" required>

  <label class="form-label">User Name:</label>
  <input name="username"  class="form-control"  placeholder="Enter User Name" required>
  
    <label class="form-label">Password:</label>
    <input type="password" name="password"  class="form-control" placeholder="Enter password"required>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign In</button>
</form>
</div>
</body>
<hr><hr><hr><hr><hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Musaddak Rana\OneDrive\Desktop\ambulancebooking\resources\views/userregister.blade.php ENDPATH**/ ?>