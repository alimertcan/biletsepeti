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
	@foreach($products as $product)
	

	
	
<div>
<a href="{{route('ticket',['id' =>$product->id])}}">{{$product->title}}</a>
</div>              
@endforeach

	
@endsection