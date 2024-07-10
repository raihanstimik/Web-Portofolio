<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <!-- Fonts -->
     <link rel="dns-prefetch" href="//fonts.bunny.net">
     <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
 
 
     <!-- Scripts -->
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
     @vite('resources/css/app.css')
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        {{-- {{ __('You are logged in!') }} --}}
                        {{-- @extends('layouts.app') --}}
                        @auth
                        <div class="card-body">
                            <a class="btn btn-primary font-bold py-2 px-4 rounded" href="{{ route('create') }}">Tambah Data </a>
                            <table class="table table-bordered mt-4">
                                <thead>
                                    <tr>
                                        <th class="border text-center">ID</th>
                                        {{-- <th class="border text-center">Role</th> --}}
                                        <th class="border text-center">Name</th>
                                        <th class="border text-center">Email</th>
                                        <th class="border text-center">Created At</th>
                                        <th class="border text-center">Updated At</th>
                                        <th class="border text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="text-center">{{ $i }}</td>
                                            {{-- <td class="text-center">{{ $user->role_id }}</td> --}}
                                            <td class="text-center">{{ $user->name }}</td>
                                            <td class="text-center">{{ $user->email }}</td>
                                            <td class="text-center">{{ $user->created_at }}</td>
                                            <td class="text-center">{{ $user->updated_at }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                                {{-- untuk menghapus data --}}
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" onclick="return confirm('Hapus data ini ?')" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endauth
</body>
</html>