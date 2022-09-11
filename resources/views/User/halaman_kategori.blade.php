<!doctype html>
<html lang="en">


<head>
    <title>{{ $title ?? 'App Toko' }}</title>
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

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <style>
        .img-box {
            width: 340px;
            height: 470px;
            /* border: solid red; */
        }

        .modified-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

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
                            <!-- <li class="scroll-to-section"><a href="kategori">Kategori Wilayah</a></li> -->
                            <li class="submenu">
                                <a href="javascript:;">Kategori Wilayah</a>
                                <ul>
                                    <li class="scroll-to-section"><a href="#bangli">Bangli</a></li>
                                    <li class="scroll-to-section"><a href="#kintamani">Kintamani</a></li>
                                    <li class="scroll-to-section"><a href="#susut">Susut</a></li>
                                    <li class="scroll-to-section"><a href="#tembuku">Tembuku</a></li>
                                </ul>
                            </li>
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
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Bangli</h4>
                                <span>Bali, Bangli, Bangli</span>
                                <div class="main-border-button">
                                    <a href="bangli">Lihat detail</a>
                                </div>
                            </div>
                            <img class="" src="assets/images/panglipuran.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Kintamani</h4>
                                            <span>Bali, Bangli, Kintamani</span>
                                            <div class="main-border-button">
                                                <a href="kintamani">Lihat detail</a>
                                            </div>
                                        </div>
                                        <img src="assets/images/KINTAMANI-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Susut</h4>
                                            <span>Bali, Bangli, Susut</span>
                                            <div class="main-border-button">
                                                <a href="susut">Lihat detail</a>
                                            </div>
                                        </div>
                                        <img src="assets/images/SUSUT.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Tembuku</h4>
                                            <span>Bali, Bangli, Tembuku</span>
                                            <div class="main-border-button">
                                                <a href="tembuku">Lihat detail</a>
                                            </div>
                                        </div>
                                        <img src="assets/images/tembuku-1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ***** Main Banner Area End ***** -->

                <!-- ***** Bangli Area Starts ***** -->
                <section class="section" id="bangli">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <h2>BANGLI</h2>
                                    <span>Tempat makan di daerah Bangli.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="women-item-carousel">
                                    <!-- <div class="img-box"> -->
                                    <div class="owl-women-item owl-carousel">

                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/warung pak jhon.png" alt="">
                                                </div>
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Wr. Pak Jhon</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/radja bakso bangli.png" alt="">
                                                </div>
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Radja Bakso Bangli</h4>
                                                <!-- <span>$45.00</span> -->
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/OJO DUMEH.png" alt="">
                                                </div>
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Wr. Ojo Dumeh</h4>
                                                <!-- <span>$130.00</span> -->
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/nasi kajeng.png" alt="">
                                                </div>
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Wr. Nasi Kajeng</h4>

                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ***** Bangli Area Ends ***** -->

                <!-- ***** Kintamani Area Starts ***** -->
                <section class="section" id="bangli">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <h2>KINTAMANI</h2>
                                    <span>Tempat makan di daerah Kintamani.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="women-item-carousel">
                                    <div class="owl-women-item owl-carousel">
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">

                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>

                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/paperhils.jpg" alt="">
                                                </div>
                                                <!-- <img src="assets/images/paperhils.jpg" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Restoran Paperhills</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/montana.jpg" alt="">
                                                </div>
                                                <!-- <img src="assets/images/montana.jpg" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Restoran Montana</h4>
                                                <!-- <span>$45.00</span> -->
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/ritatkala.jpg" alt="">
                                                </div>
                                                <!-- <img src="assets/images/ritatkala.jpg" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Restoran Ritatkala Cafe</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/apungresto-1.webp" alt="">
                                                </div>
                                                <!-- <img src="assets/images/apungresto-1.webp" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Resto Apung Kintamani</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ***** Kintamani Area Ends ***** -->

                <!-- ***** Susut Area Starts ***** -->
                <section class="section" id="bangli">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <h2>SUSUT</h2>
                                    <span>Tempat makan di daerah Susut.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="women-item-carousel">
                                    <div class="owl-women-item owl-carousel">
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">

                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>

                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/nukad tampaksiring.jpg" alt="">
                                                </div>
                                                <!-- <img src="assets/images/nukad tampaksiring.jpg" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Nukad Tampaksiring Susut</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/jfc susut.png" alt="">
                                                </div>
                                                <!-- <img src="assets/images/jfc susut.png" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>JFC Susut</h4>
                                                <!-- <span>$45.00</span> -->
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/babi guling juwita.png" alt="">
                                                </div>
                                                <!-- <img src="assets/images/babi guling juwita.png" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Wr. Babi Guling Juwita</h4>
                                                <!-- <span>$130.00</span> -->
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/wr. makan vegetarian.png" alt="">
                                                </div>
                                                <!-- <img src="assets/images/wr. makan vegetarian.png" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Wr. Makan Vegetarian</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ***** Susut Area Ends ***** -->

                <!-- ***** Tembuku Area Starts ***** -->
                <section class="section" id="bangli">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-heading">
                                    <h2>TEMBUKU</h2>
                                    <span>Tempat makan di daerah Tembuku.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="women-item-carousel">
                                    <div class="owl-women-item owl-carousel">
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/warung putri.png" alt="">
                                                </div>
                                                <!-- <img src="assets/images/warung putri.png" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>Warung Putri</h4>
                                                <!-- <span>$75.00</span> -->
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/ack bangbang.png" alt="">
                                                </div>
                                                <!-- <img src="assets/images/ack bangbang.png" alt=""> -->
                                            </div>
                                            <div class="down-content text-center">
                                                <h4>ACK Bangbang</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content text-center">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/Ristorante Lereng Agung.png" alt="">
                                                </div>
                                                <!-- <img src="assets/images/Ristorante Lereng Agung.png" alt=""> -->
                                            </div>
                                            <div class="down-content">
                                                <h4>Ristorante Lereng Agung</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="thumb">
                                                <div class="hover-content text-center">
                                                    <ul>
                                                        <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="img-box">
                                                    <img class="modified-img" src="assets/images/Warung Mang Dangka.png" alt="">
                                                </div>
                                                <!-- <img src="assets/images/Warung Mang Dangka.png" alt=""> -->
                                            </div>
                                            <div class="down-content">
                                                <h4>Warung Mang Dangka</h4>
                                                <div class="rating-css">
                                                    <div class="star-icon">
                                                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                                                        <label for="rating1" class="fa fa-star"></label>
                                                        <input type="radio" value="2" name="product_rating" id="rating2">
                                                        <label for="rating2" class="fa fa-star"></label>
                                                        <input type="radio" value="3" name="product_rating" id="rating3">
                                                        <label for="rating3" class="fa fa-star"></label>
                                                        <input type="radio" value="4" name="product_rating" id="rating4">
                                                        <label for="rating4" class="fa fa-star"></label>
                                                        <input type="radio" value="5" name="product_rating" id="rating5">
                                                        <label for="rating5" class="fa fa-star"></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ***** Tembuku Area Ends ***** -->

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
            </div>
        </div>
    </div>
</body>

</html>