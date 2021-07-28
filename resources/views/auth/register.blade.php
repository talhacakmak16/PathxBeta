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
    <title>Kayıt Ol | Pathx |</title>

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

<div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title" style="text-align: center">Kayıt Ol   </h2>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">İsim</label>
                                <input class="input--style-4" type="text" name="name" placeholder="isminizi giriniz..." value="{{old('name')}}">
                              </div>

                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Email</label>
                                <input class="input--style-4 @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <i style="color: red;">{{ $message }}</i>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    </div>
                     <div class="row row-space">


                        <div class="col-2">
                            <div class="input-group">
                                <label class="label ">Şifre</label>
                                <input class="input--style-4 @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                         <i style="color: red">{{ $message }}</i>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Şifre Doğrula') }}</label>

                            <div class="col-md-6">
                                <input  id="password-confirm" type="password" class="input--style-4" name="password_confirmation" required autocomplete="new-password">
                             </div>
                            </div>
                        </div>


                    </div>
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Doğum Tarihi</label>
                                <div class="input-group-icon">
                                    <input class="input--style-4 js-datepicker" type="text" name="date" placeholder="Tarih giriniz...">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                        </div>



                        <div class="col-2" style="margin-top: 20px;">
                            <div class="input-group">
                                <label class="label">Cinsiyet</label>
                                <div class="p-t-10">
                                    <label class="radio-container m-r-45">Erkek
                                        <input type="radio" checked="checked" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">Kadın
                                        <input type="radio" name="gender">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="p-t-15">
                        <button class="btn btn--radius-2 btn--blue" type="submit">Kayıt Ol</button>
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
