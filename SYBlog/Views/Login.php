<?php

function Loginn()
{global $db;

    if($_POST)
    {
        $Username = $_POST["Username"];
        $Password = $_POST["Password"];

        $sorgu = $db->prepare("select * from Admin where Username = ? and Password = ? LIMIT 1");
        $sorgu->execute([$Username, $Password]);
        $say = $sorgu->rowCount();

        if ($say > 0) {
            $_SESSION["userBilgi"] = "success";
            header("Location: Admin/Anasayfa");
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Login V3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="wwwroot/LoginTemplate/images/icons/favicon.ico"/>
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/css/util.css">
        <link rel="stylesheet" type="text/css" href="wwwroot/LoginTemplate/css/main.css">
        <!--===============================================================================================-->
    </head>
    <body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('/wwwroot/LoginTemplate/images/bg-01.jpg');">
            <div class="wrap-login100">
                <form method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                    <span class="login100-form-title p-b-34 p-t-27">
						Giriş Yap
					</span>

                    <div class="wrap-input100 validate-input" data-validate = "Kullanıcı Adınız">
                        <input class="input100" type="text" name="Username" placeholder="Kullanıcı Adı">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Şifreniz">
                        <input class="input100" type="password" name="Password" placeholder="Şifre">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>



                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Giriş
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="#">
                            şifremi unuttum?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="wwwroot/LoginTemplate/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="wwwroot/LoginTemplate/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="wwwroot/LoginTemplate/vendor/bootstrap/js/popper.js"></script>
    <script src="wwwroot/LoginTemplate/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="wwwroot/LoginTemplate/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="wwwroot/LoginTemplate/vendor/daterangepicker/moment.min.js"></script>
    <script src="wwwroot/LoginTemplate/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="wwwroot/LoginTemplate/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="wwwroot/LoginTemplate/js/main.js"></script>

    </body>
    </html>
<?php
}?>