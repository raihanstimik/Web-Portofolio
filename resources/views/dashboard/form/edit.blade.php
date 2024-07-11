@vite('resources/css/app.css')
@extends('layouts.home')
@section('home')
    <form class="border border-gray-900/10 rounded-lg shadow-lg p-10" action="{{ route('form.store') }}" method="POST">
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h1 class="text-base font-semibold leading-7 text-gray-900">Biodata diri formulir</h1>
                <p class="mt-1 text-sm leading-6 text-gray-600">*Isikan data diri anda dengan benar dan tidak ada salah
                    ketik.</p>


                {{-- nama form --}}
                <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <div class="mb-5">
                            <label for="base-input"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama :</label>
                            <input type="text" id="base-input"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                </div>

                {{-- pilih provinsi --}}
                <div class="sm:col-span-3">
                    <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Provisi :</label>
                    <div class="mt-2">
                        <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option disabled selected>Pilih Provinsi</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatera Utara">Sumatera Utara</option>
                            <option value=""></option>
                        </select>
                    </div>
                </div>

                {{-- email form --}}
                <div class="mt-5">
                    <div class="sm:col-span-3">
                        <form class="max-w-sm mx-auto">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                                Aktif</label>
                            <input type="email" id="email" aria-describedby="helper-text-explanation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="nama@email.com">
                        </form>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="sm:col-span-3">
                        <form class="">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ceritakan Tentang Diri
                                Anda :</label>
                            <textarea id="message" rows="8" cols="50"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Saya seorang Kapten kapal laud dan memiliki minat bakat pada ternak ikan lele...."></textarea>
                        </form>
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
                        <input type="text" id="base-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                {{-- Posisi form --}}
                <div class="sm:col-span-3 mt-5">
                    <div class="mb-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                            Perusahaan :</label>
                        <input type="text" id="base-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                {{-- Tanggal form --}}
                <div class="sm:col-span-3">
                    <div class="mb-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            mulai :</label>
                        <input type="date" id="base-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <div class="mb-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal
                            akhir:</label>
                        <input type="date" id="base-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                {{-- jobdesk --}}
                <div class="sm:col-span-3">
                    <div class="mb-5">
                        <form class="">
                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jobdeks :</label>
                            <textarea id="message" rows="8"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="*Melakukan analisa kredit terperinci..."></textarea>
                        </form>
                    </div>
                <hr>
  {{-- riwayat pendidikan --}}
  <div class="border-b border-gray-900/10 pb-12 mt-7">
    <h2 class="text-base font-semibold leading-7 text-gray-900">Riwayat Pendidikan</h2>
    <p class="mt-1 text-sm leading-6 text-gray-600">Isi Riwayat Pendidikan terakhir yang pernah anda alami.</p>
    {{-- pendidikan --}}
    <div class="sm:col-span-3 mt-5">
      <div class="mb-5">
        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Sekolah :</label>
        <input type="text" id="base-input"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        </div>

        {{-- jurusan --}}
        <div class="sm:col-span-3">
          <div class="mb-5">
            <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jurusan :</label>
            <input type="text" id="base-input"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </div>
            {{-- tanggal masuk --}}
            <div class="sm:col-span-3">
              <div class="mb-5">
                <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal masuk :</label>
                <input type="date" id="base-input"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                </div>
                {{-- tanggal lulus --}}
                <div class="sm:col-span-3">
                  <div class="mb-5">
                    <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal lulus :</label>
                    <input type="date" id="base-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    </div>
                    {{-- nilai --}}
                    <div class="sm:col-span-3">
                      <div class="mb-5">
                        <label for="base-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ipk :</label>
                        <input type="text" id="base-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        </div>
                        {{-- keterangan textarea--}}
                        <div class="sm:col-span-3">
                          <div class="mb-5">
                            <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan :</label>
                            <textarea id="message" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="*opsional"></textarea>
                            </div>
                            </div>
<hr>
                  {{-- soft skill textarea--}}
                    <div class="sm:col-span-3">
                      <div class="mb-5">
                        <label for="message"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Soft Skill :</label>
                        <textarea id="message" rows="8"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="*opsional"></textarea>
                        </div>
                        {{-- hard skill textarea --}}
                        <div class="sm:col-span-3">
                          <div class="mb-5">
                            <label for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hard Skill :</label>
                            <textarea id="message" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="*opsional"></textarea>
                            </div>
                            </div>
                            {{-- Bahasa yang dipelajari textarea--}}
                            <div class="sm:col-span-3">
                              <div class="mb-5">
                                <label for="message"
class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bahasa yang dipelajari :</label>
                                <textarea id="message" rows="8"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="*opsional"></textarea>
                                </div>
                                </div>

                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a type="" href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" 
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
                </div>
    </form>
    </div>
@endsection
