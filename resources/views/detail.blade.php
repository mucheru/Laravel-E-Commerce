<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@extends('master')
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="detail-img" src="{{$product->gallery}}">

</div>

<div class="col-sm-6">
<a href="/"><h1>Go back</h1> </a>

<h2>{{$product->name}}</h2>
<h3>Price:{{$product->price}}</h3>
<h4>Details:{{$product->description}}</h4>
<h4>Caategory:{{$product->category}}</h4>
<br>
<form action="/add_to_cart" method="post">

@csrf
<input type="hidden" name="product_id" value={{$product->id}}>
<button class="btn btn-primary">Add to Cart</button>

</form>
</br>
<br>
<button class="btn btn-success">Buy Now</button>
</br>


</div>
</div>
</div>
@endsection
</body>
</html>