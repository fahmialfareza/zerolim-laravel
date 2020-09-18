<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zerolim - Jual minyak jelantahmu sekarang juga</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/zerostyle.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/zerofont.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/navbar.js"></script>
</head>
<body>
    <section id="login">
        <div class="jumbowrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 center-content d-none d-sm-block">

                        <img src="img/login vector sunkiss.svg" class="img-fluid w-75" alt="">

                    </div>
                    <div class="col-md-6 center-content">
                      <form method="POST" action="{{ route('login') }}">
                        <a href="/" class="d-block m-auto">
                            <img src="img/logo sunkiss.png" class="img-fluid w-25 d-block m-auto" alt="">
                        </a>
                        <input id="email" type="email" placeholder="email" class="inputlogin @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <input id="password" type="password" placeholder="password" class="inputlogin @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <button type="submit" class="loginbtn">LOGIN</button>
                      </form>
                      <p>Atau</p>
                      <a href="/register" class="signuptext">Daftar</a>
                    </div>
                </div>
        </div>
        </div>

    </section>
</body>
</html>
