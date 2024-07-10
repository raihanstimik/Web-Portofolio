<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/css/app.css')

    {{-- text --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

</head>
<body>
    <div id="app" class="d-flex">
        @auth
        <div class="d-flex flex-column flex-shrink-0 p-2 text-bg-white shadow-sm" style="width: 210px; height: 100vh;">
            <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-black text-decoration-none">
              <svg class="bi pe-none me-2" width="30" height="30"></svg>
              <span class="fs-5">ATS Portofolio</span>
            </div>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="{{ route('main.index') }}" class="nav-link text-black" aria-current="page">
                  <svg class="bi pe-none me-2" width="6" height="6"></svg>
                  Halaman
                </a>
              </li>
              <li>
                <a href="{{ route('profil.index') }}" class="nav-link text-black" aria-current="page">
                  <svg class="bi pe-none me-2" width="6" height="6"><use xlink:href="#table"></use></svg>
                  Profil
                </a>
              </li>
              <li>
                <a href="{{ route('pengalaman.index') }}" class="nav-link text-black">
                  <svg class="bi pe-none me-2" width="6" height="6"></svg>
                  Pengalaman
                </a>
              </li>
              <li>
                <a href="{{ route('pendidikan.index') }}" class="nav-link text-black">
                  <svg class="bi pe-none me-2" width="6" height="6"><use xlink:href="#grid"></use></svg>
                  Pendidikan
                </a>
              </li>
              <li>
                <a href="{{ route('keahlian.index') }}" class="nav-link text-black">
                  <svg class="bi pe-none me-2" width="6" height="6"><use xlink:href="#people-circle"></use></svg>
                  Keahlian
                </a>
              </li>
            </ul>
            <hr>
            <div>
            </div>
          </div>
          @endif
        <div class="w-full">
          <header class="site-header">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
							{{-- < href="/" class="text-decoration-none d-inline-flex align-items-center"> --}}
								{{-- <img class="header-logo-image" src="/logo.svg" alt="Logo"> --}} 
                        </h1>
                    </div>

                    <div class="position-relative z-100 flex justify-end p-3">

                        @guest
                        <a role="button" href="{{ route('register') }}" class="text-decoration-none">
                            <button class="btn btn-primary">Daftar</button>
                        </a>

                        <a role="button" href="{{ route('login') }}" class="text-decoration-none">
                            <button class="btn">Masuk</button>
                        </a>
                    </div>
                    @endif
                    
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            </button>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/">Dashboard</a></li>
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
                        
                      </div>
            </div>
        </header>
        <div class="datauser">
          <div class="row justify-content-center">
            <div class="col-md-11">
                  <div class="card">
                      <div class="card-header">
                        @include('user.pesan')
                      </div>
                      @endif
                      @yield('content')
                      
                      <div class="card-body">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
      $(document).ready(function() {
          $('.summernote').summernote({
              height: 200
          });
      });
  </script>
      </body>
</html>
