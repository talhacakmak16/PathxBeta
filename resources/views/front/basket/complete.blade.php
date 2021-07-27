@extends('layouts.master')
@section('content')

    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Ödeme Sayfası</h1>

        </div>
    </div>




    <div class="container py-5">
        <div class="row py-5">
            @if(session('Status'))
                {{session('status')}}
            @endif
            <form class="col-md-9 m-auto" method="post" action="{{route('basket.store')}}" role="form">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">İsim</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputsubject">Telefon :</label>
                    <input type="phone" class="form-control mt-1" name="phone" placeholder="telefon numaranız">
                </div>
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname">İl/İlçe</label>
                        <input type="text" class="form-control mt-1" id="name" name="" placeholder="İstanbul...">
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">Adres</label>
                        <input type="email" class="form-control mt-1" name="adress" placeholder="Adres">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="inputmessage">Mesaj</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Mesajınızı giriniz..." rows="8"></textarea>

                </div>


                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn btn-success btn-lg px-3">Tamamla</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @endsection
