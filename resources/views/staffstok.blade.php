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
	

	
	
  <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
    <div class="thumbnail">
      <img src="{{$product->imagePath}}" alt="..." class="image-responsive">
      <div class="caption">
        <h3><p><a href="{{route('ticket',['id' =>$product->id])}}" class="title">{{$product->title}}</a></p></h3>
        <p class="description">{{$product->description}}</p>
		    <p class="description">Stok:{{$product->stok}}</p>
		
       	<form action="{{route('staffstok')}} " method="post">
						<input id="id" name="id" type="hidden" value="{{$product->id}}">
						
						 <div class="form-group">
                            <label for="name">Stock:</label>
                           <div class="row">
						 
						   <input type="number" id="stok" name="stok" placeholder=" " class="form-control">
						   <button type="submit"class="btn btn-danger pull-right" role="button">ChangeStock</button>
						   
	
						   </div>
                        </div>
						{{ csrf_field() }}
						
						
					
						</form>
		</div>
      </div>
  
	
    </div>
  
</div>
	@endforeach
@endsection