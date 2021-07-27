@extends('layouts.admin')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(session('status'))
                        <div class="alert alert-primary" role="alert">
                            {{session('status')}}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Sipariş Detayı</h4>
                            <p class="category"></p>
                        </div>
                        <div class="card-content">


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label >Alıcı : </label>
                                            {{$data[0]['name']}}


                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label >Kargo Adresi :</label>
                                        {{$data[0]['adress']}}


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label >Telefon Numarası :</label>
                                        {{$data[0]['phone']}}


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating is-empty">
                                        <label >Mesaj: </label>
                                        {{$data[0]['message']}}


                                    </div>
                                </div>
                            </div>
                       @foreach(json_decode($data[0]['json'],true) as $key => $value)
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label >Ürün Adı : </label>
                                            {{$value['name']}}
                                            <br>
                                            <label >Ürün Fiyatı : </label>
                                            {{$value['price']}} TL

                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>


                            @endforeach
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
