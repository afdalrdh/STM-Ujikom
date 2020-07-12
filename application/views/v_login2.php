<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    <link href="<?= base_url() . "assets/css/"; ?>util.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/css/"; ?>login.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/css/"; ?>buatlogin.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() . "assets/css/"; ?>bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
    <div class="login-left">
        <div class="login-logo">
            <img src="<?= base_url() . "assets/images/"; ?>logo.png" style="width:450px; padding-top:120px; margin-right:20px;" alt="" srcset="">
            <p class="text-logo">Aplikasi Ticketing<br>Pesawat dan Kereta Api</p>
        </div>
    </div>
    <div class="login-right">
        <div class="input">
            <div class="wrap-login100">
                <form action="<?= base_url('login/aksi_login'); ?>" method="post" class="login100-form validate-form p-l-55 p-r-55 p-t-120">
                    <span class="login100-form-title">
                        Aplikasi Ticketing <br><b>Pesawat</b> dan <b>Kereta Api</b>
                    </span>

                    <label for="inisial" style="padding-bottom:5px;">Masukkan Username :</label>
                    <div class="wrap-input100 validate-input m-b-16">
                        <input class="input100" type="text" name="username" placeholder="username" required>
                        <span class="focus-input100"></span>
                    </div>

                    <label for="inisial" style="padding-bottom:5px; padding-top:10px;">Masukkan Password :</label>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="password" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="text-right p-t-13 p-b-23"></div>
                    <div class="container-login100-form-btn">
                        <input type="submit" class="login100-form-btn" value="SUBMIT">
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>
</html>