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
						{{$item['item']['title']}} | {{$item['qty']}} Tickets || {{$item['item']['description']}} 
						</li>
						<form action="{{route('user.profile')}} " method="post">
						<input id="id" name="id" type="hidden" value="{{$order->id}}">
						{{ csrf_field() }}
						@if($order->status==0)
						<button type="submit"  class="btn btn-danger disabled pull-right">Request Cancel</button>
						<button type="submit"  class="btn btn-primary pull-right">Get Back</button>
						@else
						<button type="submit"  class="btn btn-danger pull-right">Request Cancel</button>
						<button type="submit"  class="btn btn-primary disabled pull-right">Get Back</button>
						@endif
						</form>
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