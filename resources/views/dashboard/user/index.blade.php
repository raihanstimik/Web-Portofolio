@extends('layouts.home')
@section('home')
<div class="hidden sm:mb-8 sm:flex sm:justify-center">
</div>
<div class="text-center">
    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Create More ATS Portofolio
        Easily</h1>
    <p class="mt-6 text-lg leading-8 text-gray-600">No need for pen and paper,just fill in your
        personal data and your portfolio will be ready</p>

    {{-- jika user sudah login maka akan diarahkan ke halaman dashboard --}}
    @guest
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ Route('register') }}"
                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</a>
            <a href="{{ Route('login') }}" class="text-sm font-semibold leading-6 text-gray-900">Login</a>
        </div>
    @endguest
    @auth
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="{{ Route('template.index') }}"
                class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Mulai
                buat portofolio</a>
        @endauth
    </div>
</div>
@endsection