@extends('layouts.master')
@section('content')

    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">

                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
  @if(session('status'))
      {{session('status')}}
  @endif


    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3" id="img-container" >
                        <img class="card-img img-fluid" src="{{asset($data[0]['image'])}}" alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-dark fas fa-chevron-left"></i>
                                <span class="sr-only">Previous</span>
                            </a>
                        </div>
                        <!--End Controls-->
                        <!--Start Carousel Wrapper-->
                        <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                            <!--Start Slides-->
                            <div class="col-md-4"></div>

                            <!--End Slides-->
                        </div>
                        <!--End Carousel Wrapper-->
                        <!--Start Controls-->
                        <div class="col-1 align-self-center">
                            <a href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-dark fas fa-chevron-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{$data[0]['name']}}</h1>
                            <p class="h3 py-2">{{$data[0]['price']}} TL</p>

                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Forma:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{$data[0]['name']}}</strong></p>
                                </li>
                            </ul>

                            <h6>Açıklama:</h6>
                            <p>{{$data[0]['info']}}</p>


                            <h6>Özellikleri:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Kategori : {{(\App\Models\Category::getField($data[0]['categoryid'],"name"))}}, Forma </li>

                                <li>Takım : {{\App\Models\Teams::getField($data[0]['teamid'],"name")}} </li>
                                <li>Marka : Nike,Addidas,Kappa</li>

                            </ul>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Beden :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Adet
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-dark" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-dark" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>

                            </form>
                            <div class="row pb-3">
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-outline-success" name="submit" value="buy">Satın Al</button>
                                </div>
                                <div class="col d-grid">
                                    <a class="btn btn-outline-primary" href="{{route('sepet',['id'=>$data[0]['id']])}}" role="button">Sepete ekle</a>
                                   </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
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
                                    <p class="text-muted">Yorumlar (24)</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    @endsection
@section('script')
    <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });


    </script>
@endsection
