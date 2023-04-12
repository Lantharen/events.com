@extends('base')
@section('page.title', 'Customers Create')
@section('page.content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="{{ route('customers.store') }}" method="post">
                    @csrf
                    <div>
                        <label for="name"
                            class="form-label">Name</label>
                        <input
                            type="text" class="form-control" name="name" id="name">

                    </div>
                    <div>
                        <label for="email"
                            class="form-label">Email</label>
                        <input
                            type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
