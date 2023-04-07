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
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Total</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->total }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
