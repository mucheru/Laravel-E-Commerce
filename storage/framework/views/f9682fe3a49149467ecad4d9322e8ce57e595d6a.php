<html lang="en">
<head>
  <title>E-commmerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php $__env->startSection("content"); ?>


<div class="custom-product" >
<div class="col-sm-10">
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="row-searched-item">
  <div class="col-sm-3">
  <a href="detail/<?php echo e($item->id); ?>">
      <img src="<?php echo e($item->gallery); ?>">
        
      </div>

      <div class="col-sm-3">
  <a href="detail/<?php echo e($item->id); ?>">
     
        <h3><?php echo e($item->name); ?></h3>
        <p><?php echo e($item->description); ?></p>
      </div>


      <div class="col-sm-3">

      </div>
      </a>
      </div>
      </div>
      </div>    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/steve/CRM/resources/views/cartlist.blade.php ENDPATH**/ ?>