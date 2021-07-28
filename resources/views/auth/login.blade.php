@extends('layouts.master')
    @section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Giriş Yap | Pathx |</title>

    <!-- Icons font CSS-->
    <link href="{{asset('reg/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('reg/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{asset('reg/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('reg/vendor/datepicker/daterangepicker.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('reg\css\main.css')}}" rel="stylesheet" media="all">
</head>

<body>

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">

    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Giriş Yap</h2>
                <form method="POST" action="{{route('login')}}">

                    @csrf

                    <div class="form-group">
                        <div class="input-group">
                            <label class="label">Email</label>
                            <input class="input--style-4" type="email" name="email">
                            @if(Session::get('fail'))
                                <div class="alert alert-danger" style="color:darkred;margin-left: 5px">
                                    {{Session::get('fail')}}
                                </div>
                            @endif
                        </div>

                        <div class="input-group">
                            <label class="label">Şifre</label>
                            <input class="input--style-4"  type="password" name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                    </div>



                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Giriş Yap</button>
                        <br>
                        <br>
                        <div style=""><a href="{{route('register')}}">Bir Hesabın Yok mu ? ,Hemen Kayıt Ol</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Jquery JS-->
<script src="{{asset('reg/vendor/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('reg/vendor/select2/select2.min.js')}}"></script>
<script src="{{asset('reg/vendor/datepicker/moment.min.js')}}"></script>
<script src="{{asset('reg/vendor/datepicker/daterangepicker.js')}}"></script>

<!-- Main JS-->
<script src="{{asset('reg/js/global.js')}}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->

@endsection
