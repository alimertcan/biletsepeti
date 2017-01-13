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
    <table>
        <thead>
        <th>OID </th>
        <th>UID</th>
		<th>order</th>
		<th>order</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($orders as $order)
	
            <tr>
                <form action="{{ route('staffcancelticket2') }}" method="post">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->name }} <input type="hidden" name="id" value="{{ $order->id }}"></td>
					<td><input type="checkbox"> </td>
                    {{ csrf_field() }}
                    <td><button type="submit">Cancel Tickets</button></td>
                </form>
            </tr>
			
        @endforeach
        </tbody>
    </table>
@endsection