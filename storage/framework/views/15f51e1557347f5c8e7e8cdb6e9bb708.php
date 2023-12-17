
<?php $__env->startSection('content'); ?>
<body>
<div class="container custom-login">
      <div class="row">
        <div class="col-sm-4 col-sm-offset-4">

      

        <form action="login" method="POST">
        
              <div class="form-group">
                <?php echo csrf_field(); ?>
                <label for="exampleInputEmail1">User Name</label>
                <input type="username" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
            <button type="submit" class="btn btn-primary">Login</button>
         </form>




        </div>

    </div>
</div>
<a href="userregister"><button class="btn btn-primary">Sign In</button></a></div>
</body>
<hr><hr><hr><hr><hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\backup 23\ambulancebooking\resources\views/userlogin.blade.php ENDPATH**/ ?>