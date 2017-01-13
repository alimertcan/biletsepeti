 @extends('layouts.master')
 
 @section('content')
	<div class="row">
		<div class="col-sm-6 col-md-4">
			<h1>Add Ticket</h1>
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
				</div>
			@endif	
			@foreach($products as $product)
			<input id="id" name="id" type="hidden" value="{{$product->id}}">
	<form action="{{route('staffedit')}} " method="post">
	<div class="form-group">
		<label for ="title">Title</label>
		<input type="text" id="title" name="title" class="form-control" value="{{$product->title}}">
		</div>
		<div class="form-group">
		<label for ="imagePath">ImagePath</label>
		<input type="text" id="imagePath" name="imagePath" class="form-control"value="{{$product->imagePath}}">
		</div>
		<div class="form-group">
		<label for ="description">Description</label>
		<input type="text" id="description" name="description" class="form-control"value="{{$product->description}}">
		</div>
		<div class="form-group">
		<label for ="price">Price</label>
		<input type="number" id="price" name="price" class="form-control"value="{{$product->price}}">
		</div>
		<div class="form-group">
		<label for ="price">Stock</label>
		<input type="number" id="stok" name="stok" class="form-control"value="{{$product->stok}}">
		</div>
		
		<button type="submit" class="btn btn-primary">Edit Ticket</button>
		{{ csrf_field()}}
		@endforeach
	</form>
    </div>
  </div>
  @endsection