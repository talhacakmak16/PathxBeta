@extends('layouts.master')
@section('content')

<div class="content" id="cont">
    <div class="container" >
        <div class="row align-items-center">
            <div class="col-lg-6 mr-auto text-white" id="ss" >
                <div class="mb-5">
                    <h3 class="text-center" id="baslik">İletişim Bilgilerimiz</h3>
                    <p id="contact" class="text-center" > İstanbul'da Pathx markası olarak şuan aktif olarak 2 mağazamız bulunmaktadır</p>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="h5 mb-3">İstanbul</h3>
                        <ul class="list-unstyled mb-5">
                           <li class="d-flex mb-2"><img style="width: 25px;height: 25px;margin-right: 10px;" src="{{asset('images/front/map.png')}}" alt="">Kültür Caddesi / 16.Sokak / Beşiktaş - İstanbul</li>
                           <li class="d-flex mb-2"><img style="width: 25px;height: 25px;margin-right: 10px;" src="{{asset('images/front/red.png')}}" alt="">+90 555 555 55 16</li>
                           <li class="d-flex"><img style="width: 25px;height: 25px;margin-right: 10px;" src="{{asset('images/front/mail.png')}}" alt="">info@patxcompany.com</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h3 class="h5 mb-3">Bursa</h3>
                        <ul class="list-unstyled mb-5">
                            <li class="d-flex mb-2"><img style="width: 25px;height: 25px;margin-right: 10px;" src="{{asset('images/front/map.png')}}" alt="">  Hayat Caddesi / Arif Sokak / Osmangazi - Bursa</li>
                            <li class="d-flex mb-2"><img style="width: 25px;height: 25px;margin-right: 10px;"  src="{{asset('images/front/red.png')}}" alt="">  +90 555 555 55 16</li>
                            <li class="d-flex"><img style="width: 25px;height: 25px;margin-right: 10px;" src="{{asset('images/front/mail.png')}}" alt="">  info@patxcompany.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 " id="dd">
                <div class="box" id="kk">
                    <h3>Bize Mesaj Gönder !</h3>
                    <form class="mb-5" id="contactform" novalidate="novalidate" action="" method="post">
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <label for="name" class="col-form-label">İsim</label>
                          <input type="text" class="form-control" name="name" id="name">
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <label for="email" class="col-form-label">E-mail</label>
                          <input type="text" class="form-control" name="email" id="email">
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-md-12 form-group">
                          <label for="message" class="col-form-label">Mesaj</label>
                          <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
                      </div>
                  </div>
                        <div class="row" >
                        <div class="col-md-12">
                          <input type="submit" name="submit" value="Gönder" id="but"  class="btn btn-block btn-primary  py-2 px-4">
                          <span class="submitting"></span>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
