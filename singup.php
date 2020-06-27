<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sing Up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="singup/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="singup/css/util.css">
    <link rel="stylesheet" type="text/css" href="singup/css/main.css">
    <!--===============================================================================================-->
</head>


<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('singup/images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <a href="index.php"><img src="singup/images/undo.svg" style="width: 25px;"></a>
                <form class="login100-form validate-form" action="#" method="POST">
                    <center>
                        <img src="singup/images/user.svg" alt="Avatar" class="avatar w-25" style="top: -10px;">
                    </center>
                    <span class="login100-form-title p-b-49">
                        Sing Up
                    </span>

                    <div class="wrap-input100 m-b-23" >
                        <span class="label-input100">Username</span>
                        <input class="input100" type="text" name="username" placeholder="Type your username">
                        <span class="focus-input100" ></span>
                    </div>
                    <div class="wrap-input100 m-b-23" >
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Type your email">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100" >
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password_1" placeholder="Type your password">
                        <span class="focus-input100" ></span>
                    </div>
                    <div class="wrap-input100 ">
                        <span class="label-input100"></span>
                        <input class="input100" type="password" name="password_2" placeholder="ReType your password">
                        <span class="focus-input100"></span>
                    </div>

                    <br>
                    <?php

if (isset($_POST['submit'])) {
  $username = htmlspecialchars($_POST['username']);
  $email = htmlspecialchars($_POST['email']);
  $password_1 = htmlspecialchars($_POST['password_1']);
  $password_2 = htmlspecialchars($_POST['password_2']);

if($password_1 = $password_2){
    $conn = mysqli_connect('localhost','root','','realestate');
    $query = mysqli_query($conn , "INSERT INTO `register`(`username` , `email` ,`password_1`) VALUE('$username', '$email' ,'$password_1') ");
     if ($query) {
     header("location:index.php");
     }
}else{
    $errors['result'] = 'Please ReType Same password';
}

}
?>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn" name="submit">
                                Sing Up
                            </button>
                        </div>
                    </div>

                    <br>
                    <div class="flex-c-m">
                        <a href="#" class="login100-social-item bg1">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="login100-social-item bg2">
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="login100-social-item bg3">
                            <i class="fa fa-google"></i>
                        </a>
                    </div>


            </div>
            </form>
        </div>
    </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>