@extends('layouts.app')
@section('content')
@auth
            <div class="pb-3 p-2"><a href="{{ route('main.create') }}" class="btn btn-primary">tambah halaman</a></div>
            <div class="table-reponsive">
                <table class="table table-stripped" style="border: 1px solid; border-collapse:collapse;">
                    <thead style=" background-color:#FFF5E1;">
                        <tr>
                            <th class="col-1 text-center">No</th>
                            <th class="col-2 text-center">Judul</th>
                            <th>keterangan</th>
                            <th class="col-3 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach ($data as $item)
                        <tr>
                            <td class="text-center" style="background-color:#D6EFD8;border:1px solid; ">{{ $i }}</td>
                            <td class="text-center">{{ $item->judul }}</td>
                            <td>{!! $item->isi !!}</td>
                            <td class="text-center">
                            <a href='' class="">show</a>

                            {{-- edit data --}}
                            <a href='{{ route('main.edit',$item->id)}}'
                            class="btn btn-sm btn-warning">Edit</a>

                            {{-- delete data --}}
                            <form onsubmit="return confirm('Yakin mau hapus data ini?')"
                                action="{{ route('main.destroy', $item->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" type="submit" name='submit'>Del</button>
                            </form>
                            </td>
                        </tr>
                        <?php $i++;?>
                        @endforeach
                    </tbody>
                </table>
            </div>
@endif
@endsection