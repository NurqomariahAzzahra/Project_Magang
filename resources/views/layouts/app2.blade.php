<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin' }}</title>
    <!-- Styles -->
    <link rel="shortcut icon" href="{{ asset('assets/img/keranjang.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-custom shadow-sm py-3">
            <div class="container">
                @if(!empty(auth()->user()->id))
                <a class="navbar-brand" href="{{ route('admin.index') }}"><b>{{ config('app.name') }}</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon text-dark pt-2"><i class="fas fa-bars"></i></span>
                </button>
                @else
                <a class="navbar-brand" href="{{ url('/') }}"><b>{{ config('app.name') }}</b></a>
                @endif
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @if(!empty(auth()->user()->id))
                        <!-- <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.index') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.produk') }}">Data Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('admin.kategori') }}">Data Kategori</a>
                        </li> -->
                        @endif
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li> --}}
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('admin.profil') }}">
                                    Profil Akun
                                </a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="row no-gutters mt-1 ">
            <div class="col-md-2 bg-danger pr-2 pt-4">
                <ul class="nav flex-column ml-6 mb-5 ">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.index') }}"><i class="bi bi-clipboard-data"></i>Dashboard</a>

                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.produk') }}"><i class="bi bi-bank"><i class="fa-solid fa-kitchen-set"></i></i>Data Produk</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.kategori') }}"><i class="bi bi-clipboard-data"></i>Data Categori</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white hover:text-gray-300" href="#"><i class="bi bi-bank"></i>Data Restoran</a>
                        <hr class="bg-secondary">
                        </a<aside class="fas fa-tachometer-alt mr-3 hover:text-gray-300">
                        </aside>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('admin.kategori') }}"><i class="bi bi-clipboard-data"></i>Data Categori</a>
                        <hr class="bg-secondary">
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  text-white hover:text-gray-300" href="#"><i class="bi bi-bank"></i>Data Restoran</a>
                        <hr class="bg-secondary">
                        </a<aside class="fas fa-tachometer-alt mr-3 hover:text-gray-300">
                        </aside>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4 col-md-3 "></div>
            <h3><i class="fas fa-tachometer-alt mt-1 mr-6 col-md-3"></i> DASHBOARD</h3>
        </div>
    </div>

    <div class="w-full overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            @yield('content')

        </main>
        <!-- 
            <footer class="w-full bg-gray-600 text-white text-right p-2">
                <a target="_blank" class="bold">NurqomariahAzzahra|1915101010</a>.
            </footer> -->
    </div>



    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    @yield('javascript')
</body>

</html>