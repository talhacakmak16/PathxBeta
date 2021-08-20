@extends('layouts.master')
@section('content')
    <!-- Start Content -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="h2 pb-4">Kategoriler</h1>
                <ul class="list-unstyled templatemo-accordion">
                    <li class="pb-3">
                    <li class="nav-item dropdown">
                        <div class="str" style="margin-bottom: 25px;">
                        <a class="side-item" href="{{route('shop')}}"><h5> Hepsi ( {{$sayi=\App\Models\TeamJerseys::query()->count()}})  </h5></a>
                        </div>
                        @foreach(\App\Models\Category::all() as $value)

                            <div class="str">
                            <a class="side-item" href="{{ route('cat', ['selflink'=> $value->selflink]) }}">{{ $value->name }}  (  {{" ".$sayi=\App\Models\TeamJerseys::query()->where('categoryid','=',$value->id)->count()}} )</a>
                            </div>
                        @endforeach
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">

                        </ul>
                    </div>
                    <div class="col-md-6 pb-4">
                        <div class="search-bar">
                            <form action="{{route('search')}}" method="GET">
                              <div class="col-md-9 divs">
                              <input class="src" type="text" value="" name="q"  placeholder="   Ara">
                                <button type="submit" style="border: none;background: none;"><i class="fas fa-search"></i></button>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">

                    @foreach(\App\Models\TeamJerseys::simplePaginate(15)->chunk(2) as $chunk)

                    @foreach($chunk as $key =>$value)

                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0 forma" >
                            <div class="card rounded-0" href="{{route('detay',['selflink'=>$value['selflink']])}}">
                                  <img class="card-img rounded-0 img-fluid"  src="{{asset($value['image'])}}">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">

                                        <li style="margin-top: 190px;margin-left: 10px;"><a class="border:none; text-white mt-2" style="margin-left: 180px;margin-top: 100px;" href="{{route('sepet.sepet',['id'=>$value['id']])}}"><i class="fas fa-cart-plus" style="width: 30px;height: 30px;"></i></a></li>
                                    </ul>


                                </div>
                            </div>
                            <div class="card-body" style="height: 150px;width: 255px;">
                                <a href="{{route('detay',['selflink'=>$value['selflink']])}}" style="font-family: 'Arial';text-align: center" class="h3 text-decoration-none">  {{$value['name']}}</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li style="font-style: italic; text-align: center;">{{\App\Models\Teams::getField($value['teamid'],"name")}}</li>

                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <i><img class="star" src="{{asset('images/front/star.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                        <i><img class="star" src="{{asset('images/front/star.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                        <i><img class="star" src="{{asset('images/front/star.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                        <i><img class="star" src="{{asset('images/front/star2.png')}}" style="height: 17px;width: 17px;" alt=""></i>
                                        <i><img class="star" src="{{asset('images/front/star2.png')}}" style="height: 17px;width: 17px;" alt=""></i>

                                    </li>
                                </ul>
                                <p class="text-center mb-0">{{$value['price']}} ₺</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                        {{$data->links()}}
                </div>

                <div div="row">
                    <ul class="pagination pagination-lg justify-content-end">
                        <li class="page-item disabled">
                            <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0" href="#" tabindex="-1">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link rounded-0 shadow-sm border-top-0 border-left-0 text-dark" href="#">3</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->

    <!-- Start Brands -->
    <section class="bg-light py-5">
        <div class="container my-4">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Markalarımız</h1>
                    <p>
                        Orijinal Lisanslı Ürünlerimizin Anlaşmalı Olduğu Markalar
                    </p>
                </div>
                <div class="col-lg-9 m-auto tempaltemo-carousel">
                    <div class="row d-flex flex-row">
                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="prev">
                                <i class="text-light fas fa-chevron-left"></i>
                            </a>
                        </div>
                        <!--End Controls-->

                        <!--Carousel Wrapper-->
                        <div class="col">
                            <div class="carousel slide carousel-multi-item pt-2 pt-md-0" id="multi-item-example" data-bs-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <!--First slide-->
                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_01.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_02.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_03.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_04.png')}}" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End First slide-->

                                    <!--Second slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_01.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_02.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_03.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_04.png')}}" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Second slide-->

                                    <!--Third slide-->
                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_01.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_02.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_03.png')}}" alt="Brand Logo"></a>
                                            </div>
                                            <div class="col-3 p-md-5">
                                                <a href="#"><img class="img-fluid brand-img" src="{{asset('assets/images/brand_04.png')}}" alt="Brand Logo"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Third slide-->

                                </div>
                                <!--End Slides-->
                            </div>
                        </div>
                        <!--End Carousel Wrapper-->

                        <!--Controls-->
                        <div class="col-1 align-self-center">
                            <a class="h1" href="#multi-item-example" role="button" data-bs-slide="next">
                                <i class="text-light fas fa-chevron-right"></i>
                            </a>
                        </div>
                        <!--End Controls-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Brands-->
@endsection
