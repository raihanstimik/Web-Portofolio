@extends('layouts.app')
@section('admin')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mb-2">
                <div class="card">
                    <div class="card-header">
                        <h1>
                            <a href="{{ route('konten.create') }}" class="btn btn-primary btn-sm float-end">+ Add Product</a>
                        </h1>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Descripsi</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($konten as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @if ($item->image_path)
                                                <img width="100px" src="{{ asset($item->image_path) }}" alt="gambar">
                                            @else
                                                <p>Tidak ada gambar</p>
                                            @endif
                                        </td>
                                        <td>{{ $item->category_konten }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td class="text-center">
                                            {{-- <a href="#" type="button" class="btn btn-success" data-bs-toggle="konten"{{ $item->id }}">
                                        Detail
                                    </a> --}}

                                    <a class="btn btn-warning" href="{{ route('konten.edit', ['konten' => $item->id]) }}">
                                        Edit
                                    </a>

                                            {{-- konten HAPUS --}}
                                            <form action="{{ route('konten.destroy', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-primary"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus konten ini?')">Hapus</button>
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
@endsection
