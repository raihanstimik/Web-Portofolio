@extends('layouts.app')

@section('content')
    <div class="datauser">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">Manajemen User data</div>

                    <div class="card-body">
                        <table class="table table-striped">
    <title>Edit User</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<>
    <div class="container">
        <h1>Edit User</h1>
        <form action="{{ route('update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}">
            </div>
            <div class="form-group">
                <label for="password">password:</label>
                <input type="password" name="password" class="form-control" value="{{ $user->password }}">
            </div>
            <!-- Add other fields as necessary -->
            <button type="submit" class="btn btn-primary">Update</button>
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
