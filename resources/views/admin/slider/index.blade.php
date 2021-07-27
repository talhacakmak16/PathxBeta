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
                            <h4 class="title">Slider</h4>
                            <p class="category">Mevcut Slider Listesi</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr>
                                    <th>Fotoğraf</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr></thead>
                                <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td><img src="{{asset($value['image'])}}" alt=""></td>

                                        <td><a href="{{route('admin.slider.edit',['id'=>$value['id']])}}">Düzenle</a></td>

                                        <td><a href="{{route('admin.slider.delete',['id'=>$value['id']])}}">Sil</a></td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                    <a style="margin-left: 15px" href="{{route('admin.slider.create')}}" class="btn btn-success">Slider Ekle</a>
                </div>

            </div>
        </div>
    </div>
@endsection
