@extends('layouts.app')

@section('admin')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
     @vite('resources/css/app.css')
    <div class="datauser">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h1>Manajemen User data</h1>
                        <a href="{{ route('user.index') }}" class="text-primary text-sm" >back</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
    <div class="container">
        <h1>Edit User</h1>
        <form action="{{ route('user.update', $users->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $users->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $users->email }}">
            </div>
            <div class="form-group">
                <label for="password">password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <!-- Add other fields as necessary -->
            <button type="submit" class="btn btn-primary mt-4">Update</button>
        </form>
    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection
