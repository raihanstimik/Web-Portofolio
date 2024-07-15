@extends('layouts.app')
@section('content')
<div class="pb-3 p-2"><a href="{{ route('main.index') }}" class="btn btn-secondary p-2">
    ← Kembali
</a></div>
<form action="{{ route('main.update',$data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="judul" class="form-label">Judul :</label>
        <input
            type="text"
            class="form-control-sm"
            name="judul"
            id="judul"
            aria-describedby="helpId"
            placeholder="Judul"
            value="{{ $data->judul }}"
        />
    </div>
    <div class="mb-3">
        <label for="isi" class="form-label">Isi :</label>
        <textarea name="isi" cols="30" rows="5" class="form-control summernote">{{ $data->isi }}
        </textarea>
    </div>
    <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
</form>
@endsection