@extends('layouts.master')

@section('content')
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
                <form action="{{ route('staffcancelticket') }}" method="post">
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