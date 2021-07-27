@extends('layouts.master')
@section('content')
    <!-- Start Banner Hero -->

    <!-- End Banner Hero -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin: 100px">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">

                <img class="d-block w-100" src="{{asset('images/slider/591/large/12389.png')}}" alt="First slide">

            </div>

            <div class="carousel-item">
                <img class="d-block w-100"  src="{{asset('images/slider/268/large/15071.png')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/slider/268/large/15071.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Herkese Hitap Eden Kategoriler</h1>
                <p>
                    Kadın , erkek , çocuk farketmez herkese uygun ürünlerimiz sizleri beklemekte </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="kategori/erkek"><img src="{{asset('images/front/erkek.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Erkek</h5>

            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="kategori/kadin"><img src="{{asset('images/front/kadın.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Kadın</h2>

            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="kategori/cocuk"><img src="{{asset('images/front/çocuk.jpg')}}" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Çocuk</h2>

            </div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Çok Yakında</h1>
                    <p>
                        Özel Üretim Yeni Ürünlerimiz Çok Yakında Stoklarda Sizin İçin Hazırlanmaya Başladı...
                    </p>
                </div>
            </div>
            <div class="row">
                @foreach(\App\Models\SpecialModel::all()->chunk(2) as $chunk)

                    @foreach($chunk as $key =>$value)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                            <img src="{{asset($value['image'])}}" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i><img src="{{asset('images/front/star.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                    <i><img src="{{asset('images/front/star.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                    <i><img src="{{asset('images/front/star.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                    <i><img src="{{asset('images/front/star2.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                    <i><img src="{{asset('images/front/star2.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                </li>
                                <li class="text-muted text-right">{{$value['price']}} TL</li>
                            </ul>
                            <a href="shop-single.html" class="h2 text-decoration-none text-dark">{{$value['name']}}</a>
                            <p class="card-text">

                            </p>

                            <a href=""><p class="text-muted">Yorumlar ({{ $x= rand(0,24)}}) </p></a>
                        </div>
                    </div>
                </div>
                    @endforeach
                    @endforeach
            </div>
        </div>
    </section>
    <!-- End Featured Product -->
@endsection
