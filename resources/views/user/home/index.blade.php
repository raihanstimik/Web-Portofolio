@extends('layouts.dashboard')
@section('navbar')
<header >
    <div class="bg-dark py-5">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-6">
                <div class="text-center my-5">
                    <h1 class="display-5 fw-bolder text-white mb-2">Create more ATS portofolio easily</h1>
                    <p class="lead text-white-50 mb-4">No need for pen and paper,just fill in your personal data and your portfolio will be ready</p>
                    
                    {{-- jika user belum login --}}
                    @guest
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="{{ route('register') }}">Daftar</a>
                        <a class="btn btn-outline-light btn-lg px-4" href="{{ route('login') }}">Masuk</a>
                    </div>
                    @endif
                    {{-- jika user sudah login --}}
                    @auth
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#pilihan">Mulai Buat Portofolio Anda</a>
                    </div>
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Features section-->
<section class="py-5 border-bottom " id="features" style="background-color:#F5F7F8;">
    <div class="container px-3 my-3" id="pilihan">
        <h1 class="m-0 text-center text-black">Pilih Template</h1>
        <hr>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
                <div class="btn profile-container">
                        <div class="profile-card ">
                            <a href="{{ route('formulir.index') }}">  <img src="{{ asset('sampel/sampel1.jpg') }}" alt="Lindsay Walton" ></a>
                            <div class="profile-info">
                                <h3>ATS PORTOFOLIO</h3>
                                <p>CV ATS Friendly adalah curriculum vitae yang didesain khusus agar lolos seleksi Applicant Tracking System (ATS). ATS sendiri merupakan perangkat yang digunakan perekrut untuk membaca CV pelamar.</p>
                            </div>
                            <div class="profile-links">
                                <a href="#">X</a>
                                <a href="#">in</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
</div>
@endsection