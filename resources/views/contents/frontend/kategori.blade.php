@extends('layouts.frontend')
@section('content')

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-9 mx-auto">
            <!--product -->
            <div class="product">
                
                @forelse($kategori as $r)
                <div class="thumb">
                    <div class="hover-effect">
                        <div class="inner-content">
                            <div class="main-border-button">
                                <a href="{{ url('kategori/'.$r->id) }}">Lihat detail</a>
                            </div>
                        </div>
                    </div>

                    <img src="{{ url_images('gambar', $r->foto) }}" class="img-fluid w-70 h-70">
                </div>

                <!-- <a href="{{ url_images('gambar'.$r->id) }}" class="text-produk">{{ $r->foto }}</a> -->
                @endforeach

                <h4 class="mb-4"><b>{{ $title }}</b></h4>
                @include('components.frontend.produk_list')
                <br>
                {{ $produk->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')

@endsection