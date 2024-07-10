<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('tampilan/halaman.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('sampel/tema.css') }}">
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <p class="navbar-brand">PORTOFOLIO</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                        @auth
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Setting</a></li>
                            <li><li class="dropdown-divider"></li>
                            <li>
                            <form action="/logout" method="POST">
                            @csrf
                            <input type="submit" class="dropdown-item" value="logout" />
                            </form>
                            </li>
                            </ul>
                        </div>
                    @endif
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
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
                                    <a href="{{ route('main.index') }}">  <img src="{{ asset('sampel/sampel1.jpg') }}" alt="Lindsay Walton" ></a>
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
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5"><p class="m-0 text-center text-white">Prototype</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>