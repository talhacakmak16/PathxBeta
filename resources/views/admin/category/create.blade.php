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
                            <h4 class="title">Kategori Ekle</h4>
                            <p class="category">Kategori oluşturunuz</p>
                        </div>
                        <div class="card-content">
                            <form action="{{route('admin.category.create.post')}}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Kategori Adı</label>
                                            <input type="text" name="name" class="form-control">
                                            <span class="material-input"></span>
                                        </div>
                                            <select id="parent_id" name="parent_id" class="form-control">
                                            <option value="0">Ana Kategori</option>
                                                @foreach($allCategories as $rows)
                                                    <option value="{{ $rows->id }}">{{ $rows->name }}</option>
                                                @endforeach
                                            </select>
                                        @if ($errors->has('parent_id'))
                                            <span class="text-red" role="alert">
                                             <strong>{{ $errors->first('parent_id') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary pull-right">Kategori Ekle</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
