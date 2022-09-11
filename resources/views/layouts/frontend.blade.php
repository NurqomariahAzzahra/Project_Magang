<!doctype html>
<html lang="en">


<head>
    <title>{{ $title ?? 'BangliFood' }}</title>
    <!-- Required meta tags -->
    <!-- CSRF Token -->

    <!--
TemplateMo 571 Hexashop
https://templatemo.com/tm-571-hexashop
-->

</head>

<meta name="csrf-token" content="{{ 

csrf_token() }}">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="" name="description">
<meta content="" name="keywords">
<meta property="og:locale" content="ID_id" />
<meta property="og:type" content="website" />
<meta property="og:image" content="{{ asset('assets/img/keranjang.png') }}">

<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


<!-- Bootstrap CSS -->
<link rel="shortcut icon" href="{{ asset('assets/img/keranjang.png') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{ asset('assets/css/main.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Hexa CSS -->
<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
<link rel="stylesheet" href="assets/css/owl-carousel.css">
<link rel="stylesheet" href="assets/css/lightbox.css">

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

<title>Kategori Wilayah</title>


<!-- Additional CSS Files -->
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">
<link rel="stylesheet" href="assets/css/owl-carousel.css">
<link rel="stylesheet" href="assets/css/lightbox.css">


<body>

    <!-- ***** Header Area End ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="assets/images/white-logo.jpg" style="width:150px;">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ url('/') }}">Home</a></li>
                            <li class="scroll-to-section"><a href="kategori">Kategori Wilayah</a></li>
                            <li class="scroll-to-section">
                                @if(isset(auth()->user()->name))
                                <a class="scroll-to-section" href="{{ url('admin') }}"><b>Halaman Admin</b></a>
                                @else
                                <a class="scroll-to-section" href="{{ url('login') }}">Login</a>
                                @endif
                            </li>


                            <li class="scroll-to-section">
                                <a class="scroll-to-section" href="#" data-bs-toggle="modal" data-bs-target="#ModalSearch" tabindex="-2" aria-disabled="true">
                                    <i class="fas fa-search"></i>
                                </a>
                            </li>
                        </ul>


                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header -->


    @php
    $profil = App\Models\User::where('id', 1)->first();
    @endphp
    <div class="clearfix  mt-5 pt-4"></div>
    <div class="main">
        @yield('content')
    </div>
    <!-- end main -->

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h4>Kontak Kami</h4>
                    <!-- <p class="pt-2">08:00 - 17:00 WIB / (Senin - Jumat)</p> -->
                    <i class="fas fa-envelope-square me-2"></i> diskominfosan@banglikab.go.id
                    <br>
                    <i class="fas fa-phone-square me-2"></i> (0366) 93804
                    <br>
                    <i class="fas fa-map-marker-alt me-2"></i> Jalan Brigjen Ngurah Rai No. 30
                    <br><br>
                </div>
                <div class="col-sm-4">
                    <h4>Tetap Terhubung Dengan Kami</h4>
                    <a href="#" class="text-terhubung"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-news"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="text-terhubung"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container text-center">
            Copyright &copy; <?= date('Y'); ?> {{ config('app.name') }} All Reserved
            <br>
            Bangli's Food
        </div>
    </div>
    <!-- end footer -->

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>


    <!-- modal cari -->
    <div class="modal fade" id="ModalSearch" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        <i class="fas fa-search mr-2"></i> Cari Produk
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="get" action="{{ url('search') }}">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="keyword" autocomplete="off" class="form-control" placeholder="Search disini !">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal cari -->
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @yield('javascript')
</body>

</html>