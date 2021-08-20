@extends('layouts.master')
@section('content')
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <div class="container mb-4" style="margin-top: 150px;">

        <h3 style="margin-bottom: 10px;">Sepetim({{\App\Helper\basketHelper::countData()}})</h3>
        <div class="row" style="margin-bottom: 250px">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col"> Fotoğraf</th>
                            <th scope="col">Ürün</th>
                            <th scope="col">Stok Durumu</th>
                            <th scope="col" class="text-center">Adet</th>
                            <th scope="col" class="text-right">Fiyat</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(\App\Helper\basketHelper::allList() as $key => $value)
                        <tr>
                            <td><img src="{{$value['image']}}" alt=""></td>
                            <td>{{$value['name']}}</td>
                            <td>Var</td>

                            <td><input class="form-control"  type="number" value=1 /></td>
                            <td class="text-right">{{$value['price']}} TL</td>
                            <td class="text-right"> <a href="{{route('sepet.remove',['id'=>$key])}}" ><button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i> </button></a> </td>
                        </tr>
                        @endforeach



                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Alışveriş Toplam</td>
                            <td class="text-right">{{\App\Helper\basketHelper::totalPrice()}} TL</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Kargo</td>
                            <td class="text-right">6TL</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Toplam Fiyat</strong></td>
                            <td class="text-right"><strong>{{\App\Helper\basketHelper::totalPrice()+ 6 }} TL</strong></td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6 al">
                        <a class="" href="{{route('shop')}}"> <button class="btn btn-block">Alışverişe Devam Et</button></a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right el">
                        <a href="{{route('sepet.complete')}}"><button class="btn btn-block ">Satın Al</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
