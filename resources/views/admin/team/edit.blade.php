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
                            <h4 class="title"> Düzenle</h4>
                            <p class="category">{{$data[0]['name']}}</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.team.edit.post',['id'=>$data[0]['id']])}}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <input type="text" value="{{$data[0]['name']}}" name="name" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            @if($data[0]['image']!=0)
                                                <img src="{{asset($data[0]['image'])}}" style="width: 100px;height:100px" alt="">
                                            @endif

                                            <input style="opacity: 1;position: inherit" type="file" value="{{$data[0]['image']}}" name="image" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <input type="text" value="{{$data[0]['info']}}" name="info" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">

                                            <input type="number" value="{{$data[0]['year']}}" name="year" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right"> Kaydet</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
