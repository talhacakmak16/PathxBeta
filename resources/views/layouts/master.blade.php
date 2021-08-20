<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pathx </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://kit.fontawesome.com/8d00dc281a.js" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
    <div class="container text-light">
        <div class="w-100 d-flex justify-content-between">

                <div>

                    <a class="navbar-sm-brand text-light text-decoration-none"  href="mailto:info@company.com"></a>

                </div>

        <div class="top-left">
            <div>
                <i class=" mx-2"></i>
                <span style="margin: -15px;font-family: 'Arial Black';font-size: inherit">{{\App\Helper\basketHelper::totalPrice()}} TL</span>
                <i class=" mx-2"></i>
                <a href="{{route('sepet.checkout')}}"><img style="width: 30px;height: 30px;"  src="{{asset('images\front\basket3.png')}}"></a>
                <p style="margin-bottom: -3px;font-family: 'Arial Black';"><a href="{{route('sepet.flush')}}"style="color: white;">Sepeti Temizle</a></p>
            </div>


        </div>

        </div>
        </div>
</nav>
<!-- Close Top Nav -->


<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow">

    <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand text-default logo h1 align-self-center" href="{{route('home')}}">
            Pathx
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">

            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('shop')}}">Mağaza</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">İletişim</a>
                    </li>



                </ul>
            </div>

          <div class="col-2" style="height: 42px;">
              <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Giriş') }}</a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Kayıt Ol') }}</a>
                          </li>
                      @endif
                  @else
                      @if(Auth::user()->name == 'Admin')
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}{{"  "}} <img src="{{asset('images/front/user.png')}}"style="height: 30px;width: 30px;" alt="">
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{route('admin.index')}}">
                                  Admin Panel
                              </a>
                              <a class="dropdown-item" href="#">
                                  Profil
                              </a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                  {{ __('Çıkış') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                          @endif
                          @if(Auth::user()->name !='Admin')
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }}{{"  "}} <img src="{{asset('images/front/user.png')}}"style="height: 30px;width: 30px;" alt="">
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                      <a class="dropdown-item" href="#">
                                          Profil
                                      </a>
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          {{ __('Çıkış') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                              @endif

                  @endguest
              </ul>

          </div>
        </div>

    </div>
</nav>

<!-- Close Header -->

<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="get" class="modal-content modal-body border-0 p-0">
            <div class="input-group mb-2">
                <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                <button type="submit" class="input-group-text bg-success text-light">
                    <i class="fa fa-fw fa-search text-white"></i>
                </button>
            </div>
        </form>
    </div>
</div>
@yield('content')
<!-- Start Footer -->
<footer class="bg-black" id="tempaltemo_footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 pt-5">
                <h1 class="h2  border-bottom pb-3 border-light logo" style="color: purple">Pathx </h1>
                <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i ><img src="{{asset('images/front/location-pin.png')}}" style="height: 30px;width: 30px;margin-right: 5px;" alt=""></i>
                        Cumhuriyet Mah. / Üsküdar / İstanbul
                    </li>
                    <li>
                        <i><img src="{{asset('images/front/phone-call.png')}}" style="height: 30px;width: 30px;margin-right: 5px;" alt=""></i>
                        <a class="text-decoration-none" href="tel:010-020-0340">224-512-4812</a>
                    </li>
                    <li>
                        <i><img src="{{asset('images/front/email.png')}}" style="height: 30px;width: 30px;margin-right: 5px;" alt=""></i>
                        <a class="text-decoration-none" href="mailto:info@company.com">info@pathx.com</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Ürünler</h2>
                <ul class="list-unstyled  footer-link-list">
                    <li class="foot"><a class="text-decoration-none" href="#">Futbol Forma</a></li>
                    <li class="foot"><a class="text-decoration-none" href="#">Basketbol Forma</a></li>
                    <li class="foot"><a class="text-decoration-none" href="#">Spor Ayakkabı</a></li>
                    <li class="foot"><a class="text-decoration-none" href="#">Antreman Kıyafetleri</a></li>
                    <li class="foot"><a class="text-decoration-none" href="#">Futbol Şort</a></li>
                    <li class="foot"><a class="text-decoration-none" href="#">Basketbol Şort</a></li>
                    <li class="foot"><a class="text-decoration-none" href="#">Futbol ve Basketbol Top</a></li>
                </ul>
            </div>

            <div class="col-md-4 pt-5">
                <h2 class="h2 text-light border-bottom pb-3 border-light">Yardım mı Lazım ?</h2>
                <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="#">Anasayfa</a></li>
                    <li><a class="text-decoration-none" href="#">Hakkımızda</a></li>
                    <li><a class="text-decoration-none" href="#">Mağazalarımız</a></li>
                    <li><a class="text-decoration-none" href="#">İletişim</a></li>
                    <li><a class="text-decoration-none" href="#"></a></li>
                </ul>
            </div>

        </div>

        <div class="row text-black-50 mb-4">
            <div class="col-12 mb-3">
                <div class="w-100 my-3 border-top border-light"></div>
            </div>
            <div class="col-auto me-auto">
                <ul class="list-inline text-left">
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><img
                                src="{{asset('images/front/facebook.png')}}" style="height: 50px;width: 50px;" alt=""></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i><img
                                    src="{{asset('images/front/instagram.png')}}" style="width: 50px;height: 50px;" alt=""></i></a>
                    </li>
                    <li class="list-inline-item border border-light rounded-circle text-center">
                        <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i><img
                                    src="{{asset('images/front/twitter.png')}}" style="width: 50px;height: 50px;" alt=""></i></a>
                    </li>
                    <li style="width: 30px;height: 30px;" class="list-inline-item border border-light ct-square text-center">
                        <a  class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i><img
                                    src="{{asset('images/front/gmail.png')}}" style="width: 50px;height: 50px;" alt=""></i></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div class="w-100 bg-black py-3">
        <div class="container">
            <div class="row pt-2">
                <div class="col-12">
                    <p class="text-left text-light">
                         &copy; 2021 Pathx
                        | Türkiye  | <img src="{{asset('images/front/turkey.png')}}" style="height: 30px;width: 30px;" alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- End Footer -->
<!-- Start Script -->

<script src="{{asset('assets/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/templatemo.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js" type="application/javascript"></script>
<script src="https://kit.fontawesome.com/8d00dc281a.js" crossorigin="anonymous"></script>
@yield('script')
<!-- End Script -->
</body>
</html>
