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
                            <h4 class="title">Kategoriler</h4>
                            <p class="category"> Mevcut Kategorilerin Listesi</p>
                        </div>
                        <div class="card-content table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                <tr><th>İsim</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr></thead>
                                <tbody>
                                @foreach($categories as $value)
                                     <tr>

                                        <td>
                                            {{$value['name']}}

                                                <table>
                                                    <tr>
                                                @if(count($value->childs))
                                                    @include('admin.category.manageChild',['childs'=>$value->childs])
                                                    @endif
                                                    </tr>
                                                </table>

                                        </td>
                                        <td><a href="{{route('admin.category.edit',['id'=>$value['id']])}}">Düzenle</a></td>

                                        <td><a href="{{route('admin.category.delete',['id'=>$value['id']])}}">Sil</a></td>
                                     </tr>

                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                        <a style="margin-left: 15px" href="{{route('admin.category.create')}}" class="btn btn-success">Kategori Ekle</a>
                </div>

            </div>
        </div>
    </div>
@endsection
