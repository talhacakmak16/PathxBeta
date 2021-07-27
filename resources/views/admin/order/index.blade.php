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
                            <h4 class="title">Siparişler</h4>
                            <p class="category">Eklenen Siparişlerin Listesi</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr><th>Alıcı</th>
                                    <th>Adres</th>
                                    <th>Cep</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr></thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>{{$value['name']}}</td>
                                        <td>{{$value['adress']}}</td>
                                        <td>{{$value['phone']}}</td>
                                        <td><a href="{{route('admin.order.detail',['id'=>$value['id']])}}">Detay</a></td>

                                        <td><a href="{{route('admin.order.delete',['id'=>$value['id']])}}">Sil</a></td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                    <a style="margin-left: 15px" href="{{route('admin.brand.create')}}" class="btn btn-success">Marka Ekle</a>
                </div>

            </div>
        </div>
    </div>
@endsection
