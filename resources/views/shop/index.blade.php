@extends('layouts.master')

@section('title')
Ticket System
@endsection

@section('content')
	@if(Session::has('success'))
<div class="row">

	<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
		<div id="charge-message" class="alert alert-success">
			{{Session::get('success')}}
		</div>	
	</div>
</div>	
@endif
	@foreach($products->chunk(3) as $productChunk)
	

	<div class="row">
	@foreach($productChunk as $product)
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="{{$product->imagePath}}" alt="..." class="image-responsive">
      <div class="caption">
        <h3><p><a href="{{route('ticket',['id' =>$product->id])}}" class="title">{{$product->title}}</a></p></h3>
        <p class="description">{{$product->description}}</p>
		    <p class="description">Stok:{{$product->stok}}</p>
		
        <div class="clearfix"><div class="pull-left price">{{$product->price}}TL</div>
		<a href="{{route('product.addToCart',['id' =>$product->id])}}" class="btn btn-success pull-right" role="button">Add to Cart</a>
		</div>
      </div>
    </div>
	
  </div>
  @endforeach
  <!--input type="text" class="form-control" name="search" v-model="search" -->
</div>
	@endforeach
@endsection