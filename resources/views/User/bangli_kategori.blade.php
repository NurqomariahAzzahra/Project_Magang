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

    <!-- ** Header Area Start ** -->

    <!-- aku cuman nambah di header -->
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

    <!-- ** Header Area End ** -->

    <!-- ** Main Banner Area Start ** -->
    <div class="page-heading about-page-heading2" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>B A N G L I</h2>
                        <span>Bangli adalah kecamatan sekaligus menjadi ibu kota Kabupaten Bangli, Provinsi Bali, Indonesia.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ** Main Banner Area End ** -->


    <!-- ** Products Area Starts ** -->
    <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Tempat Makan</h2>
                        <span>Check out all of our tempat makan.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                </ul>
                            </div>
                            <img src="assets/images/warung pak jhon.png" alt="">
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
                </div>
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                </ul>
                            </div>
                            <img src="assets/images/nasi kajeng.png" alt="">
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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                </ul>
                            </div>
                            <img src="assets/images/OJO DUMEH.png" alt="">
                        </div>
                        <div class="down-content text-center">
                            <h4>Ojo Dumeh</h4>

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
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="single-product.html"><i class="fa fa-eye"></i></a></li>

                                </ul>
                            </div>
                            <img src="assets/images/radja bakso bangli.png" alt="">
                        </div>
                        <div class="down-content text-center">
                            <h4>Radja Bakso Bangli</h4>

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

            <div class="col-lg-12">
                <div class="pagination">
                    <ul>
                        <li>
                            <a href="#">1</a>
                        </li>
                        <li class="active">
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- ** Products Area Ends ** -->

    <!-- Footer Area -->
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