 @extends('layouts.master')
 
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
	<div class="row">
		<div class="col-sm-8 col-md-2">

			<hr>
			<h2>Cancelled Orders</h2>
			@foreach($orders as $order)
				@if($order->status==3 && $order->payment_id==1 )
			<div class="panel panel-default">
				<div class="panel-body">
					<ul class="list-group">
						@foreach($order->cart->items as $item)
						<li class="list-group-item"><span class="badge">{{$item['price']}}TL</span> 
						{{$item['item']['title']}} | {{$item['qty']}} Tickets || {{$item['item']['description']}} 
						</li>
						<form action="{{route('stafforder')}} " method="post">
						<input id="id" name="id" type="hidden" value="{{$item['item']['id']}}">
						<input id="oid" name="oid" type="hidden" value="{{$order->id}}">
						 <div class="form-group">
                            <label for="name">Stock:</label>
                           <div class="row">
						 
						   <input type="number" id="stok" name="stok" placeholder=" " class="form-control">
						   <button type="submit"class="btn btn-danger pull-right" role="button">ChangeStock</button>
						   <a href="{{route('stafforder2',['oid' =>$order->id])}}"class="btn btn-success pull-right" role="button">Delete</a>
	
						   </div>
                        </div>
						{{ csrf_field() }}
						
						
					
						</form>
						@endforeach
					</ul>
				</div>
			<div class="panel-footer"></div>
			<strong>Total Price:{{$order->cart->totalprice}}</strong>
			</div>
				@endif
			@endforeach
		
    </div>
  </div>
  @endsection