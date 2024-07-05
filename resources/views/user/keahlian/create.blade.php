@extends('layouts.app')
@section('content')

<div class="pb-3"><a href="{{ route('keahlian.index') }}" class="btn btn-secondary">
    << kembali</a>
</div>
<form action="" method="POST">
@csrf
<div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId"
        placeholder="Judul" value="">
</div>
<div class="mb-3">
    <label for="isi" class="form-label">Isi</label>
    <textarea class="form-control summernote" rows="5" name="isi"></textarea>
</div>
<button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>

@endsection