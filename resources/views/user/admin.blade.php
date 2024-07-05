@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {{-- @extends('layouts.app') --}}

@section('content')
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
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->id }}</td>
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endauth
@endsection
@endsection
