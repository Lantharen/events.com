@extends('base')
@section('page.title', 'Orders')
@section('page.content')
    <div class="container">
        <div class="row">
            <div class="col">
                <a href="{{ route('orders.create') }}" class="btn btn-primary">Back to Orders Create</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->customer->email }}</td>
                        <td>{{ $order->total }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

