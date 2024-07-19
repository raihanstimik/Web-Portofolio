@extends('layouts.app')
@section('admin')
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
@vite('resources/css/app.css')

<div class="container-fluid">
    <div class="row">
        <div class="col-12 mb-2">
            <div class="card">
                <div class="card-header">
                    <h1>Product</h1>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="table table-auto table-hover">
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
                            <tbody>
                                @foreach ($item as $data)
                                <tr>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->provinsi }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->isi }}</td>
                                    <td>{{ $data->posisi }}</td>
                                    <td>{{ $data->perusahaan }}</td>
                                    <td>{{ $data->tgl_masuk }}</td>
                                    <td>{{ $data->tgl_keluar }}</td>
                                    <td>{{ $data->jobdesk }}</td>
                                    <td>{{ $data->sekolah }}</td>
                                    <td>{{ $data->jurusan }}</td>
                                    <td>{{ $data->tgl_mulai }}</td>
                                    <td>{{ $data->tgl_akhir }}</td>
                                    <td>{{ $data->ipk }}</td>
                                    <td>{{ $data->softskill }}</td>
                                    <td>{{ $data->hardskill }}</td>
                                    <td>{{ $data->bahasa }}</td>
                                    <td>
                                        <a href="{{ route('table_data.delete', $data->id) }}" class="btn btn-danger">Hapus</a>
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
</div>
@endsection
