

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kayıt Ol</title>

        <!-- Font Icon -->
        <link rel="stylesheet" href="{{asset('register/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

        <!-- Main css -->
        <link rel="stylesheet" href="{{asset('register/css/style.css')}}">
    </head>
    <body>

    <div class="main">
        @if(session('status'))
            <div class="alert alert-primary" role="alert">
                {{session('status')}}
            </div>
        @endif

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">

                <div class="signup-content">
                    <form method="POST" id="signup-form" action="{{route('register.post')}}" class="signup-form">
                        @csrf
                        <h2 class="form-title">Hesap Oluştur</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="İsminiz..."/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="surname" id="surname" placeholder="Soy isminiz..."/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Email..."/>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-input" name="date" id="date" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Şifreniz..."/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <button>Kayıt Ol</button>
                        </div>
                    </form>
                    <p class="loginhere">
                        Zaten Bir Hesabın Var Mı ? <a href="#" class="loginhere-link">Giriş Yap</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{asset('register/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('register/js/main.js')}}"></script>
    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    </html>

