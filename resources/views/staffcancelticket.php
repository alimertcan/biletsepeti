@extends('layouts.master')

@section('content')
    <table>
        <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-Mail</th>
        <th>order</th>
        <th>Staff</th>
        <th>Admin</th>
        <th></th>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <form action="{{ route('staffcancelticket') }}" method="post">
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->id }} <input type="hidden" name="id" value="{{ $order->id }}"></td>
                    <td><input type="checkbox" {{ $order->hasOrder('order') ? 'checked' : '' }} name="role_user"></td>
                    {{ csrf_field() }}
                    <td><button type="submit">Cancel Tickets</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection