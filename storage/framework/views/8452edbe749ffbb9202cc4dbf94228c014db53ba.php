<?php $__env->startSection("content"); ?>
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
  <div class="mb-1">
  <form action="/login" method="post">

  <?php echo csrf_field(); ?>

            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
  </div>
  </div>

  </div>
</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/steve/CRM/resources/views/login.blade.php ENDPATH**/ ?>