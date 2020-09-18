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
<section id="signup">
        <div class="jumbowrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 center-content d-none d-sm-block">

                        <img src="img/signup vector sunkiss.svg" class="img-fluid" alt="">

                    </div>
                    <div class="col-md-6 center-content">
                        <a href="/" class="d-block m-auto">
                            <img src="img/logo sunkiss.png" class="img-fluid w-25 d-block m-auto" alt="">
                        </a>
                        <form method="POST" action="{{ route('register') }}">
                          <div class="row">
                                <div class="col-md-6 center-content">
                                    <input type="text" placeholder="nama lengkap" name="nama_lengkap" class="inputsignup">
                                    <input id="password" type="password" class="inputsignup @error('password') is-invalid @enderror" name="password"  placeholder="password" required autocomplete="new-password">
                                    <select name="role" id="" class="inputsignup">
                                        <option value="" disabled selected>Daftar sebagai</option>
                                        <option value="BISNIS">Mitra Bisnis</option>
                                        <option value="PELANGGAN">Pelanggan</option>
                                    </select>
                                    <select name="jenis_usaha" id="" class="inputsignup">
                                        <option value="" disabled selected>Jenis usaha</option>
                                        <option value="Rumah makan">Rumah Makan</option>
                                        <option value="Hotel">Hotel</option>
                                        <option value="UKM">UKM</option>
                                    </select>
                                    <input type="text" placeholder="nama usaha (bila ada)" name="nama_usaha" class="inputsignup">
                                </div>
                                <div class="col-md-6 center-content">
                                    <input type="email" placeholder="email" name="email" class="inputsignup">
                                    <input id="password-confirm" type="password" class="inputsignup" name="password_confirmation" placeholder="konfirmasi password" required autocomplete="new-password">
                                    <input type="text" placeholder="alamat" name="alamat" class="inputsignup">
                                    <input type="text" placeholder="no. HP" name="no_hp" class="inputsignup">
                                </div>
                          </div>
                          <button type="submit" class="loginbtn">DAFTAR</button>
                        </form>
                        <p>Atau</p>
                        <a href="/login" class="signuptext">Login</a>
                    </div>
                </div>
        </div>
        </div>

    </section>
</body>
</html>
