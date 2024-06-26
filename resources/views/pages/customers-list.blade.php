@extends('base')
@section('page.title', 'Customers List')
@section('page.content')
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
