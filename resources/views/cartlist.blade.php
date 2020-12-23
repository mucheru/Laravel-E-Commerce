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
@section("content")
@extends('master')

<div class="custom-product" >
<div class="col-sm-10">
  @foreach($products as $item)
  <div class="row-searched-item">
  <div class="col-sm-3">
  <a href="detail/{{$item->id}}">
      <img src="{{$item->gallery}}">
        
      </div>

      <div class="col-sm-3">
  <a href="detail/{{$item->id}}">
     
        <h3>{{$item->name}}</h3>
        <p>{{$item->description}}</p>
      </div>


      <div class="col-sm-3">

      </div>
      </a>
      </div>
      </div>
      </div>    
    @endforeach
    </div>
    </div>
    </div>
    @endsection