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
                            <h4 class="title">Gelecel Ürünler</h4>
                            <p class="category">Planlanan Ürünlerin Listesi</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>Fotoğraf</th>
                                    <th>İsim</th>
                                    <th>Fiyat</th>
                                    <th>Açıklama</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr></thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{$value['image']}}</td>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['price']}}</td>
                                        <td>{{$value['info']}}</td>
                                        <td><a href="{{route('admin.special.edit',['id'=>$value['id']])}}">Düzenle</a></td>

                                        <td><a href="{{route('admin.special.delete',['id'=>$value['id']])}}">Sil</a></td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                    <a style="margin-left: 15px" href="{{route('admin.special.create')}}" class="btn btn-success">Ürün Ekle</a>
                </div>

            </div>
        </div>
    </div>
@endsection
