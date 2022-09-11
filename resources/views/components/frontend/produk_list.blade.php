<!-- ** Preloader Start ** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ** Preloader End ** -->

<style>
    .img-box {
        width: 176px;
        height: 170px;
        /* border: solid red; */
    }

    .modified-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<!-- ** Our Team Area Starts ** -->
<section class="our-team">
    <div class="container">
        <div class="row">
            @foreach($produk as $r)
            <div class="col-sm-3 mb-3 d-none d-lg-block">
                <div class="col-lg-10">
                    <!-- <div class="section-heading"> -->
                    <div class="col-lg-200">
                        <div class="team-item">
                            <div class="thumb">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <div class="main-border-button">
                                            <a href="{{ url('produk/'.$r->id) }}">Lihat detail</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-box">
                                    <img class="modified-img" src="{{ url_images('gambar', $r->gambar) }}">
                                </div>

                            </div>
                            <div class="down-content">

                                <a href="{{ url('produk/'.$r->id) }}" class="text-produk">{{ $r->nama_produk }}</a>
                                <h6 class="">Rp. {{($r->harga_jual)}},- </h6>
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
            @endforeach
        </div>

    </div>
    </div>
</section>
<!-- ** Our Team Area Ends ** -->