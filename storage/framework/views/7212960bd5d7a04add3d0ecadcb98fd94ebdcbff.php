<?php 
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();


}


?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-to ggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/cartlist">Cart(<?php echo e($total); ?>)</a>
        </li>
      </ul>
      
      <form action="/search" class="d-flex">
        <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <?php if(Session::has('user')): ?>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo e(Session::get('user')['name']); ?>

        <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="/logout">Logout</a></li>
        </ul>
      </li>
      <?php else: ?>
      <li><a  href="/login">Login</a></li>

      <?php endif; ?>

      
    </div>
  </div>
</nav><?php /**PATH /home/steve/CRM/resources/views/header.blade.php ENDPATH**/ ?>