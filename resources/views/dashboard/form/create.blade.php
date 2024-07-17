{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"> --}}

@vite('resources/css/app.css')
@extends('layouts.home')
@section('home')
    <form class="border border-gray-900/10 rounded-lg shadow-lg p-10" action="{{ route('form.store') }}" method="POST">
      @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-base font-semibold leading-7 text-gray-900">Biodata diri formulir</h1>
                <p class="mt-1 text-sm leading-6 text-gray-600">*Isikan data diri anda dengan benar dan tidak ada salah
                    ketik.</p>

                {{-- nama form --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <div class="mb-5">
                            <label for="nama"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama :</label>
                            <input type="text" id="nama" name="nama" placeholder="Nama" value="{{ Session::get('nama') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                </div>

                {{-- pilih provinsi --}}
                <div class="sm:col-span-3">
                    <label for="provinsi" class="block text-sm font-medium leading-6 text-gray-900">Provisi :</label>
                    <div class="mt-2">
                        <select id="provinsi" name="provinsi" autocomplete="provinsi" value="{{ Session::get('provinsi') }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option disabled selected>Pilih Provinsi</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value="Sumatera barat">Sumatera barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Lampung">Lampung</option>
                            <option value="DKI Jakarta">DKI Jakarta</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Sulawesi Utara"></option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua">Papua</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua Barat Daya">Papua Barat Daya</option>
                            <option value="Papua Tengah">Papua Tengah</option>
                            <option value="Papua Pegunungan">Papua Pegunungan</option>
                            <option value="Papua Selatan">Papua Selatan</option>
                           
                        </select>
                    </div>
                </div>
                {{-- email form --}}
                <div class="mt-5">
                    <div class="sm:col-span-3">
                        <form class="max-w-sm mx-auto">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                Aktif</label>
                            <input type="email" id="email" name="email" aria-describedby="helper-text-explanation" value="{{ Session::get('email') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="nama@email.com">
                        </form>
                    </div>
                </div>

                {{-- isi form --}}
                <div class="mt-5">
                    <div class="sm:col-span-3">
                        <div class="">
                            <label for="isi"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ceritakan Tentang Diri
                                Anda :</label>
                            <textarea id="isi" rows="8" cols="50" name="isi" 
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Saya seorang Kapten kapal laud dan memiliki minat bakat pada ternak ikan lele....">{{ Session::get('isi') }}</textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <div class="mt-1">
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Pengalaman </h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Isi pengalaman Pekerjaan atau mangang yang pernah anda
                    alami.</p>

                {{-- Posisi form --}}
                <div class="sm:col-span-3 mt-5">
                    <div class="mb-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Posisi
                            :</label>
                        <input type="text" id="base-input" name="posisi" placeholder="administrasi" value="{{ Session::get('posisi') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                {{-- perusahaan form --}}
                <div class="sm:col-span-3 mt-5">
                    <div class="mb-5">
                        <label for="perusahaan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Perusahaan :</label>
                        <input type="text" id="perusahaan" name="perusahaan" placeholder="PT.push mytic glory" value="{{ Session::get('perusahaan') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                {{-- Tanggal form --}}
                <div class="sm:col-span-3">
                    <div class="mb-5">
                        <label for="tanggal_mulai" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            mulai :</label>
                        <input type="date" id="tgl_mulai" name="tgl_mulai" value="{{ Session::get('tgl_mulai') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <div class="mb-5">
                        <label for="tgl_akhir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            akhir:</label>
                        <input type="date" id="tgl_akhir" name="tgl_akhir" value="{{ Session::get('tgl_akhir') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                {{-- jobdesk --}}
                <div class="sm:col-span-3">
                    <div class="mb-5">
                        <div class="">
                            <label for="jobdesk"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jobdeks :</label>
                            <textarea id="jobdesk" rows="8" name="jobdesk" 
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="*Melakukan analisa kredit terperinci...">{{ Session::get('jobdesk') }}</textarea>
                        </div>
                    </div>
                    <hr>

                    {{-- riwayat pendidikan --}}
                    <div class="border-b border-gray-900/10 pb-12 mt-7">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Riwayat Pendidikan</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Isi Riwayat Pendidikan terakhir yang pernah anda
                            alami.</p>
                        {{-- pendidikan --}}
                        <div class="sm:col-span-3 mt-5">
                            <div class="mb-5">
                                <label for="sekolah"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sekolah
                                    :</label>
                                <input type="text" id="sekolah" name="sekolah" value="{{ Session::get('sekolah') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                        </div>

                        {{-- jurusan --}}
                        <div class="sm:col-span-3">
                            <div class="mb-5">
                                <label for="jurusan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan :</label>
                                <input type="text" id="jurusan" name="jurusan"value="{{ Session::get('jurusan') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            {{-- tanggal masuk --}}
                            <div class="sm:col-span-3">
                                <div class="mb-5">
                                    <label for="tgl_mulai2"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal masuk
                                        :</label>
                                    <input type="date" id="tgl_mulai2" name="tgl_mulai2" value="{{ Session::get('tfl_mulai2') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            {{-- tanggal lulus --}}
                            <div class="sm:col-span-3">
                                <div class="mb-5">
                                    <label for="tgl_akhir2"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lulus
                                        :</label>
                                    <input type="date" id="tgl_akhir2" name="tgl_akhir2" value="{{ Session::get('tgl_akhir2') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            {{-- nilai --}}
                            <div class="sm:col-span-3">
                                <div class="mb-5">
                                    <label for="ipk"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ipk :</label>
                                    <input type="text" id="ipk" name="ipk" value="{{ Session::get('ipk') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                            </div>
                            {{-- keterangan textarea --}}
                            <div class="sm:col-span-3">
                                <div class="mb-5">
                                    <label for="isi2"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan
                                        :</label>
                                    <textarea id="isi2" rows="8" name="isi2" 
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="*opsional">{{ Session::get('isi2') }}</textarea>
                                </div>
                            </div>
                            <hr>
                            {{-- soft skill textarea --}}
                            <div class="sm:col-span-3">
                                <div class="mb-5">
                                    <label for="softskill"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Soft Skill
                                        :</label>
                                    <textarea id="softskill" rows="8" name="softskill" 
                                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="*opsional">{{ Session::get('softskill') }}</textarea>
                                </div>
                                {{-- hard skill textarea --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-5">
                                        <label for="hardskill"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hard Skill
                                            :</label>
                                        <textarea id="hardskill" rows="8" name="hardskill" value="{{ Session::get('hardskill') }}"
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="*opsional">{{ Session::get('hardskill') }}</textarea>
                                    </div>
                                </div>
                                {{-- Bahasa yang dipelajari textarea --}}
                                <div class="sm:col-span-3">
                                    <div class="mb-5">
                                        <label for="bahasa"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahasa
                                            yang dipelajari :</label>
                                        <textarea id="bahasa" rows="8" name="bahasa" 
                                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            placeholder="*opsional">{{ Session::get('bahasa') }}</textarea>
                                    </div>
                                </div>

                                <div class="mt-6 flex items-center justify-end gap-x-6">
                                    <a type="" href="/"
                                        class="text-sm font-semibold leading-6 text-gray-900">Batal</a>
                                    {{-- <button type="submit"
                                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button> --}}
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
    </form>
@endsection
