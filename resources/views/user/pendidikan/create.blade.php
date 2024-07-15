@extends('layouts.app')
@section('content')

<div class="pb-3"><a href="{{ route('pendidikan.index') }}" class="btn btn-secondary">
    << kembali</a>
</div>
<form action="" method="POST">
@csrf
<div class="mb-3">
    <label for="judul" class="form-label">Universitas</label>
    <input type="text" class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId"
        placeholder="Universitas" value="">
</div>
<div class="mb-3">
    <label for="info1" class="form-label">Nama Fakultas</label>
    <input type="text" class="form-control form-control-sm" name="info1" id="info1"
        aria-describedby="helpId" placeholder="Nama Fakultas" value="">
</div>
<div class="mb-3">
    <label for="info2" class="form-label">Nama Prodi</label>
    <input type="text" class="form-control form-control-sm" name="info2" id="info2"
        aria-describedby="helpId" placeholder="Nama Prodi" value="">
</div>
<div class="mb-3">
    <label for="info3" class="form-label">IPK</label>
    <input type="text" class="form-control form-control-sm" name="info3" id="info3"
        aria-describedby="helpId" placeholder="IPK" value="">
</div>
<div class="mb-3">
    <div class="row">
        <div class="col-auto">Tanggal Mulai</div>
        <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_mulai"
                placeholder="dd/mm/yyy" value=""></div>
        <div class="col-auto">Tanggal Akhir</div>
        <div class="col-auto"><input type="date" class="form-control form-control-sm" name="tgl_akhir"
                placeholder="dd/mm/yyy" value=""></div>
    </div>
</div>
<button class="btn btn-primary" name="simpan" type="submit">SIMPAN</button>
</form>

@endsection