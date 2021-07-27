

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giriş Yap</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('register/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('register/css/style.css')}}">
</head>
<body>

<div class="main" style="margin-top: 50px;">
    @if(session('status'))
        <div class="alert alert-primary" role="alert">
            {{session('status')}}
        </div>
    @endif

    <section class="signup">
        <!-- <img src="images/signup-bg.jpg" alt=""> -->
        <div class="container">

            <div class="signup-content" style="width: 250px;height:300px;margin-left: 100px;">
                <form method="POST" id="signup-form" action="{{route('sign.post')}}" class="signup-form">
                    @csrf
                    <h2 class="form-title">Giriş Yap</h2>

                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email..."/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" placeholder="Şifreniz..."/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>

                    <div class="form-group">
                        <button>Giriş Yap</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="{{asset('register/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('register/js/main.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>

