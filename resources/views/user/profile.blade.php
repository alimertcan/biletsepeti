 @extends('layouts.master')
 
 @section('content')
	<div class="row">
		<div class="col-sm-8 col-md-2">
			<h1>User Profile</h1>
			<div class="row">
			   <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">First Name:</label>
                            {{Auth::user()->first_name }}
                        </div>
                    </div>
				   <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Last Name:</label>
                            {{Auth::user()->last_name }}
                        </div>
						 <div class="form-group">
                            <label for="name">Email:</label>
                            {{Auth::user()->email }}
                        </div>
                    </div>	
			<li><a href="{{route('user.editprofile')}}"> User Profile</a></li>	
			</div>
			<hr>
			<h2>My Orders</h2>
			@foreach($orders as $order)
			<div class="panel panel-default">
				<div class="panel-body">
					<ul class="list-group">
						@foreach($order->cart->items as $item)
						<li class="list-group-item"><span class="badge">{{$item['price']}}TL</span> 
						{{$item['item']['title']}} | {{$item['qty']}}Tickets
						</li>
						@endforeach
					</ul>
				</div>
			<div class="panel-footer"></div>
			<strong>Total Price:{{$order->cart->totalprice}}</strong>
			</div>
			@endforeach
    </div>
  </div>
  @endsection