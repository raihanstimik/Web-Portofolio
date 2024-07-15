@extends('layouts.home')
@section('home')
<div class="border border-gray-900/10 rounded-lg shadow-lg p-10">
    
            <a href="{{ route('form.create') }}"><button type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Tambah data</button></a>
            <a href="{{ route('hasil.index') }}"><button type="button" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Result</button></a>
@foreach ($identitas as $item)
            <a href="{{ route('form.edit',$item->id) }}"><button type="button" class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Edit data</button></a>
            <form onsubmit="return confirm('Yakin mau hapus data diri ini?')" action="{{ route('form.destroy', $item->id) }}" method="POST">
@csrf
@method('DELETE')
    <button type="submit" name="submit" class="text-white bg-gradient-to-br from-pink-500 to-orange-400 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Hapus data diri</button>
</form>
        <div>
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Cek Hasil formulir</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Rincian Personal.</p>
            </div>
            <div class="mt-6 border-t border-gray-100">
                <dl class="divide-y divide-gray-100">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Nama</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['nama'] }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Provinsi</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['provinsi'] }}</dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Email</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['email'] }}
                        </dd>
                    </div>
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Tentang saya</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['isi'] }}.</dd>
                    </div>
                    </dd>
                </dl>
                <h3 class="text-base font-semibold mt-5">Pengalaman kerja</h3>
                <div class="mt-6 border-t ">
                    <dl class="divide-y divide-gray-100">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Posisi</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['posisi'] }}</dd>
                        </div>
                        <div class="mt-1 border-t ">
                            <dl class="divide-y divide-gray-100">
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Perusahaan</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['perusahaan'] }}</dd>
                                </div>
                                <div class="mt-1 border-t ">
                                    <dl class="divide-y divide-gray-100">
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal mulai</dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                              {{ $item['tgl_mulai'] }}</dd>
                                        </div>
                                        <div class="mt-1 border-t ">
                                            <dl class="divide-y divide-gray-100">
                                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                    <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal akhir
                                                    </dt>
                                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                                      {{ $item['tgl_akhir'] }}</dd>
                                                </div>
                                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                    <dt class="text-sm font-medium leading-6 text-gray-900">Tentang saya
                                                    </dt>
                                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                                      {{ $item['jobdesk'] }}.</dd>
                                                    </dd>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
                <h3 class="text-base font-semibold mt-5">Riwayat Pendidikan</h3>
                <div class="mt-4 border-t ">
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Sekolah / Universitas</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['sekolah'] }}</dd>
                    </div>
                    <div class="mt-1 border-t ">
                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Jurusan</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['jurusan'] }}</dd>
                        </div>
                        <div class="mt-1 border-t ">
                            <dl class="divide-y divide-gray-100">
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal mulai</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                      {{ $item['tgl_mulai2'] }}</dd>
                                </div>
                                <div class="mt-1 border-t ">
                                    <dl class="divide-y divide-gray-100">
                                        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                            <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal akhir
                                            </dt>
                                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                              {{ $item['tgl_akhir2'] }}</dd>
                                        </div>
                                        <div class="mt-1 border-t ">
                                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                <dt class="text-sm font-medium leading-6 text-gray-900">IPK</dt>
                                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">: {{ $item['ipk'] }}
                                                </dd>
                                            </div>
                                            <div
                                                class="px-4 py-1 border-t  border-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                <dt class="text-sm font-medium leading-6 text-gray-900">Pengalaman
                                                </dt>
                                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                                  {{ $item['isi2'] }}.</dd>
                                                </dd>
                                            </div>
                                            <div
                                                class="px-4 py-1 border-t  border-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                <dt class="text-sm font-medium leading-6 text-gray-900">Soft Skill
                                                </dt>
                                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                                  {{ $item['softskill'] }}.</dd>
                                                </dd>
                                            </div>
                                            <div
                                                class="px-4 py-1 border-t  border-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                <dt class="text-sm font-medium leading-6 text-gray-900">Hard skill
                                                </dt>
                                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                                  {{ $item['hardskill'] }}.</dd>
                                                </dd>
                                            </div>
                                            <div
                                                class="px-4 py-1 border-t  border-gray-100 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                                <dt class="text-sm font-medium leading-6 text-gray-900">Bahasa
                                                </dt>
                                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">:
                                                  {{ $item['bahasa'] }}.</dd>
                                                </dd>
                                            </div>
                                        </div>
                                        @endforeach
                                </div>
                            @endsection
