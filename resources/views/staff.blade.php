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
	<form action="{{route('staff')}} " method="post">
	<div class="form-group">
		<label for ="title">Title</label>
		<input type="text" id="title" name="title" class="form-control">
		</div>
		<div class="form-group">
		<label for ="imagePath">ImagePath</label>
		<input type="text" id="imagePath" name="imagePath" class="form-control">
		</div>
		<div class="form-group">
		<label for ="description">Description</label>
		<input type="text" id="description" name="description" class="form-control">
		</div>
		<div class="form-group">
		<label for ="price">Price</label>
		<input type="number" id="price" name="price" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary">Add Ticket</button>
		{{ csrf_field()}}
		
	</form>
    </div>
  </div>
  @endsection