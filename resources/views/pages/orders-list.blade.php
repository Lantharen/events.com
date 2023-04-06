@extends('base')
@section('page.title', 'Customers List')
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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <th scope="row">{{ $customer->id }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
