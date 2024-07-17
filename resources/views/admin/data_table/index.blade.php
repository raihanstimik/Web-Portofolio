@extends('layouts.app')
@section('admin')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@vite('resources/css/app.css')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-header">
                    <h1>Product
                        <a href="{{ route('table_data.create') }}" class="btn btn-primary btn-sm float-end">+ Add Product</a>
                    </h1>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">nama</th>
                                <th scope="col">provinsi</th>
                                <th scope="col">email</th>
                                <th scope="col">isi</th>
                                <th scope="col">posisi</th>
                                <th scope="col">perusahaan</th>
                                <th scope="col">tgl_masuk</th>
                                <th scope="col">tgl_keluar</th>
                                <th scope="col">jobdesk</th>
                                <th scope="col">sekolah</th>
                                <th scope="col">jurusan</th>
                                <th scope="col">tgl_mulai</th>
                                <th scope="col">tgl_akhir</th>
                                <th scope="col">ipk</th>
                                <th scope="col">isi</th>
                                <th scope="col">softskill</th>
                                <th scope="col">hardskill</th>
                                <th scope="col">bahasa</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
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
                                        <a href="#" type="button" class="btn btn-success" data-bs-toggle="konten"{{ $item->id }}">
                                    Detail
                                </a>

                                <a class="btn btn-warning" href="{{ route('konten.edit', ['konten' => $item->id]) }}">
                                    Edit
                                </a>

                                        konten HAPUS
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
                        </tbody> --}}
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection