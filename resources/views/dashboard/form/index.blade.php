@extends('layouts.home')
@section('home')
    <div class="border border-gray-900/10 rounded-lg shadow-lg p-10">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Data Table</h2>

<table>
    <thead>
        <tr>
            <th>No.</th>
            <th>Kolom</th>
            <th>Tipe Data</th>
            <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
        @php
            $columns = [
                'nama' => 'String',
                'provinsi' => 'String',
                'email' => 'String',
                'isi' => 'text',
                'posisi' => 'String',
                'perusahaan' => 'String',
                'tgl_mulai' => 'Date',
                'tgl_akhir' => 'Date',
                'jobdesk' => 'text',
                'sekolah' => 'String',
                'jurusan' => 'String',
                'tgl_mulai2' => 'Date',
                'tgl_akhir2' => 'Date',
                'ipk' => 'string',
                'isi2' => 'text',
                'softskill' => 'text',
                'hardskill' => 'text',
                'bahasa' => 'text',
            ];
            $index = 1;
        @endphp
        @foreach ($identitas as $key => $value)
            <tr>
                <td>{{ $index++ }}</td>
                <td>{{ $key }}</td>
                <td>{{ $columns[$key] }}</td>
                <td>{{ $value }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

            </div>
        </div>
    </div>
@endsection
