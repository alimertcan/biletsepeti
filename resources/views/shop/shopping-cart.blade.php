@extends('layouts.master')

@section('title')
Ticket Cart
@endsection

@section('content')
	
	@if(Session::has('cart'))
		<div class="row">
			<ul class="list group">	
			@foreach($products as $product)
			<li class ="list-group-item">
			<span class="badge">{{$product['qty']}}</span>
			<strong>{{$product['item']['title']}}</strong>
			<span class="label label-success">{{$product['price']}}TL</span>
			<div class="btn-group">
			<button type="button"	class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Remove<span class="caret"></span></button>
				<ul class="dropdown-menu">
				<li><a href="{{route('product.removeone',['id'=>$product['item']['id']])}}">Remove one</a></li>
				<li><a href="{{route('product.remove',['id'=>$product['item']['id']])}}">Remove all</a></li>
				</ul>
				</div>
				</li>
			
			@endforeach
			
			</ul>
		
		</div>
		
	
		<strong>Total:{{$totalprice}}TL</strong>
		
		
			<hr>
		
			
		<a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout By Card</button>
		
		<a href="{{route('checkout2')}}" type="button" class="btn btn-success">Checkout By Wire Transfer</button>
			
			
	@else
	<div class="row">
		<h2>no items in cart</h2>
		
		</div>	
	
	@endif
	
	
@endsection