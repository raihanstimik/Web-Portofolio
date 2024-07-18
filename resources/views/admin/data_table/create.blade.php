@extends('layouts.app')
@section('admin')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@vite('resources/css/app.css')
<a class="btn btn-primary fw-bold" href="{{ route('table_data.index') }}">Kembali</a>
<form action="{{ route('table_data.store') }}" method="POST">
    @csrf
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama"><br>

    <label for="provinsi">Provinsi:</label>
    <input type="text" name="provinsi" id="provinsi"><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email"><br>

    <label for="isi">Isi:</label>
    <textarea name="isi" id="isi"></textarea><br>

    <label for="posisi">Posisi:</label>
    <input type="text" name="posisi" id="posisi"><br>

    <label for="perusahaan">Perusahaan:</label>
    <input type="text" name="perusahaan" id="perusahaan"><br>

    <label for="tgl_mulai">Tanggal Mulai:</label>
    <input type="date" name="tgl_mulai" id="tgl_mulai"><br>

    <label for="tgl_akhir">Tanggal Akhir:</label>
    <input type="date" name="tgl_akhir" id="tgl_akhir"><br>

    <label for="jobdesk">Jobdesk:</label>
    <textarea name="jobdesk" id="jobdesk"></textarea><br>

    <label for="sekolah">Sekolah:</label>
    <input type="text" name="sekolah" id="sekolah"><br>

    <label for="jurusan">Jurusan:</label>
    <input type="text" name="jurusan" id="jurusan"><br>

    <label for="tgl_mulai2">Tanggal Mulai 2:</label>
    <input type="date" name="tgl_mulai2" id="tgl_mulai2"><br>

    <label for="tgl_akhir2">Tanggal Akhir 2:</label>
    <input type="date" name="tgl_akhir2" id="tgl_akhir2"><br>

    <label for="ipk">IPK:</label>
    <input type="text" name="ipk" id="ipk"><br>

    <label for="isi2">Isi 2:</label>
    <textarea name="isi2" id="isi2"></textarea><br>

    <label for="softskill">Softskill:</label>
    <textarea name="softskill" id="softskill"></textarea><br>

    <label for="hardskill">Hardskill:</label>
    <textarea name="hardskill" id="hardskill"></textarea><br>

    <label for="bahasa">Bahasa:</label>
    <textarea name="bahasa" id="bahasa"></textarea><br>

    <button type="submit">Submit</button>
</form>

@endsection