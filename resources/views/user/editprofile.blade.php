 @extends('layouts.master')
 
 @section('content')
	<div class="row">
		<div class="col-sm-6 col-md-4">
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<p>{{$error}}</p>
					@endforeach
				</div>
			@endif	
	<form action="{{route('user.editprofile')}} " method="post">
	

  
	
		
			<h1>User Profile</h1>
			<div class="row">
			   
                        <div class="form-group">
                            <label for="name">First Name:</label>
                           <input type="text" id="first_name" name="first_name" placeholder=" {{Auth::user()->first_name}}" class="form-control">
                        </div>
                     <input type="hidden" id="id" name="id" value=" {{Auth::user()->id}}" class="form-control">
				   
                        <div class="form-group">
                            <label for="name">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" placeholder="{{Auth::user()->last_name }}" class="form-control">     
                        </div>
						
                   
		<button type="submit" class="btn btn-primary">Save</button>
		{{ csrf_field()}}
		
	</form>
    </div>
  
  
  @endsection