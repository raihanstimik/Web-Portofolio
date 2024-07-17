@extends('layouts.app')
@section('admin')
<div class="container">
    <form action="{{ route('konten.update', $konten->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" value="{{ $konten->name }}" required>
        </div>
        <div>
            <label for="category_konten">Kategori Konten:</label>
            <input type="text" name="category_konten" id="category_konten" value="{{ $konten->category_konten }}" required>
        </div>
        <div>
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" required>{{ $konten->description }}</textarea>
        </div>
        <div>
            <label for="image">Pilih Gambar Baru:</label>
            <input type="file" name="image" id="image">
        </div>
        <button type="submit">Update</button>
    </form>
</div>

@endsection