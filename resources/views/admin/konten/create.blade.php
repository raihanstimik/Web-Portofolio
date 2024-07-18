@extends('layouts.app')
@section('admin')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
     @vite('resources/css/app.css')
<div class="container">
    <h1>Tambah Data </h1>
    <a class="btn btn-success fw-bold" href="{{ route('konten.index') }}">Kembali</a>
    <form action="{{ route('konten.store') }}" method="POST" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="table-responsive-md my-3">
            <table class="table">
                <tr>
                    <td><label for="nama">judul</label></td>
                    <td>:</td>
                    <td><input autocomplete="off" type="text" name="name" id="nama" required></td>
                </tr>
                <tr>
                    <td><label for="nama">konten Kategori</label></td>
                    <td>:</td>
                    <td><input autocomplete="off" type="text" name="category_konten" id="category_konten" required></td>
                </tr>
                {{-- <tr>
                    <td><label for="">Pilih Kategori</label></td>
                    <td>:</td>
                    <td>
                        <select name="category_konten" class="form-control">
                            @foreach ($category as $item)
                            <option value="{{ $item->id}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr> --}}
                <tr>
                    <td><label for="description">Deskripsi</label></td>
                    <td>:</td>
                    <td><textarea name="description" id="description" cols="23" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="gambar">pilih Gambar :</label></td>
                    <td>:</td>
                    <td><input type="file" name="image" id="image" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary">Tambah</button></td>
                </tr>
            </table>
        </div>
    </form>
</div>

@endsection