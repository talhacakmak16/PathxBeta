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



    <section class="about py-5">
        <div class="container">
            <div class="row align-items-center py-5">
                <div class="col-md-8 text-white">
                    <h1>Hakkımızda</h1><br>
                    <p>
                        1998 yılında "En yeni iletişim ve bilgisayar teknolojilerini kullanarak müşterilerine dünya standartlarında çözümler sunmak" ilkesiyle yola çıkan isimtescil.net, geçen 16 yıllık süreçte Dünya ve Türkiye’ye, en büyük domain ve hosting firmalarından biri olmayı başarmıştır.

                        2008 yılında alan adları standartlarını belirleyen ve denetleyen tek otorite ICANN'e akredite olan isimtescil.net, 2010 yılından beri Türkiye'nin en büyük 500 bilişim şirketi arasında yer almakta ve kurulduğu günden buyana 1 milyonun üzerinde domain kaydı ve 200 bininin üzerinde barındırma hizmetne ev sahipliği yapmıştır.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/images/about-hero.svg')}}" alt="About Hero">
                </div>
            </div>
        </div>
    </section>
    <!-- Close Banner -->

    <!-- Start Section -->
    <section class="container py-5">
        <div class="row text-center pt-5 pb-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Hizmetlerimiz</h1>
                <p>
                    Müşterilerimizin güvenli ve hızlı alışveriş yapmaları için elimizden geleni yapmaya çalışıyoruz.<br>
                    7/24 desteklerimiz ile tüm sorularınıza yanıt veriyoruz.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-lg-3 pb-5" >
                <div class="h-100 py-5 services-icon-wap shadow" >
                    <div class="h1  text-center border-radius"> <img style="height: 70px;width: 70px;" src="{{asset('images/front/promo.png')}}" alt=""></div>
                    <h2 class="h5 mt-4 text-center">Promosyonlar</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow">
                    <div class="h1 text-success text-center"> <img style="height: 70px;width: 70px;" src="{{asset('images/front/7-24.png')}}" alt=""></div>
                    <h2 class="h5 mt-4 text-center">7-24 Canlı Destek</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow" >
                    <div class="h1 text-success text-center"> <img style="height: 70px;width: 70px;" src="{{asset('images/front/fast.png')}}" alt=""></div>
                    <h2 class="h5 mt-4 text-center">Hızlı Kargolama</h2>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 pb-5">
                <div class="h-100 py-5 services-icon-wap shadow" id="aboutttt">
                    <div class="h1 text-success text-center"> <img style="height: 70px;width: 70px;" src="{{asset('images/front/bitcoin.png')}}" alt=""></div>
                    <h2 class="h5 mt-4 text-center">Sana Özel</h2>
                </div>
            </div>
        </div>
    </section>
    @endsection
