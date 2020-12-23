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
<div class="custom-product">
<div class="col-sm-4">
<a href="">Filter products</a>
</div>
<div class="col-sm-4">
  @foreach($products as $item) 
  
<div class="searched-item">
<a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->gallery}}" alt="Chania">
      <div class="">
        <h3>{{$item->name}}</h3>
        <p>{{$item->description}}</p>
      </div>
      </a>
    </div>
    @endforeach 
    @endsection
 
  </div>

  </div>
  

</body>

</html>