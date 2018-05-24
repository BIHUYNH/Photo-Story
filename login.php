<?php 

session_start();

require_once __DIR__. "/library/database.php";

require_once __DIR__. "/library/function.php";

$db = new Database;

$error = [];

$data = [

  'email' => postInput("email"),

  'password' => postInput("password")

];

if ($_SERVER["REQUEST_METHOD"]  == "POST") {



  if ($data['email'] == '') {

    $error['email'] = "Email k được trống";

  }  

  if ($data['password'] == '') {

    $error['password'] = "Password k được trống";

  }

  if (empty($error)) {

    $is_check = $db->fetchOne("user"," email = '".$data['email']."' AND password = '".$data['password']."' ");



    if ($is_check != NULL) {

      $_SESSION['name_user'] = $is_check['name'];

      $_SESSION['name_id'] = $is_check['id'];

      echo "<script>alert('Đăng nhập thành công'); location.href='index.php'</script>";

    }else{

      echo "<script>alert('Sai tài khoản hoặc mật khẩu!');</script>";



    }

  }

}

?>



<!----------------------------------------------------------------------------------->

<!DOCTYPE html>

<html lang="en">

<head>

	<title>Login</title>

	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	

	<link rel="icon" type="image/png" href="/adp/login/images/icons/favicon.ico"/>

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="/adp/login/vendor/bootstrap/css/bootstrap.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="/adp/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="/adp/login/fonts/iconic/css/material-design-iconic-font.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="/adp/login/vendor/animate/animate.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="/adp/login/vendor/css-hamburgers/hamburgers.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="/adp/login/vendor/animsition/css/animsition.min.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="/adp/login/vendor/select2/select2.min.css">

<!--===============================================================================================-->	

	<link rel="stylesheet" type="text/css" href="/adp/login/vendor/daterangepicker/daterangepicker.css">

<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="/adp/login/css/util.css">

	<link rel="stylesheet" type="text/css" href="/adp/login/css/main.css">

<!--===============================================================================================-->

</head>

<body>

	

	<div class="limiter">

		<div class="container-login100" style="background-image: url('/adp/login/images/bg-01.jpg');">

			<div class="wrap-login100">

				<form class="login100-form validate-form" method="post">

					<span class="login100-form-logo">

						<i class="zmdi zmdi-landscape"></i>

					</span>



					<span class="login100-form-title p-b-34 p-t-27">

						Log in

					</span>



					<div class="wrap-input100 validate-input" data-validate = "Enter username">

						<input class="input100" type="email" name="email" placeholder="Username">

						<span class="focus-input100" data-placeholder="&#xf207;"></span>

					</div>



					<div class="wrap-input100 validate-input" data-validate="Enter password">

						<input class="input100" type="password" name="password" placeholder="Password">

						<span class="focus-input100" data-placeholder="&#xf191;"></span>

					</div>



					<div class="contact100-form-checkbox">

						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">

						<label class="label-checkbox100" for="ckb1">

							Remember me

						</label>

					</div>



					<div class="container-login100-form-btn">

						<button type="submit" class="login100-form-btn" >

							Login

						</button>

					</div>



					<div class="text-center p-t-90">

						<a class="txt1" href="#">

							Forgot Password?

						</a>

					</div>

				</form>

			</div>

		</div>

	</div>



	<div id="dropDownSelect1"></div>

	

<!--===============================================================================================-->

	<script src="/adp/login/vendor/jquery/jquery-3.2.1.min.js"></script>

<!--===============================================================================================-->

	<script src="/adp/login/vendor/animsition/js/animsition.min.js"></script>

<!--===============================================================================================-->

	<script src="/adp/login/vendor/bootstrap/js/popper.js"></script>

	<script src="/adp/login/vendor/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->

	<script src="/adp/login/vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->

	<script src="/adp/login/vendor/daterangepicker/moment.min.js"></script>

	<script src="/adp/login/vendor/daterangepicker/daterangepicker.js"></script>

<!--===============================================================================================-->

	<script src="/adp/login/vendor/countdowntime/countdowntime.js"></script>

<!--===============================================================================================-->

	<script src="/adp/login/js/main.js"></script>

</body>

</html>