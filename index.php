<!DOCTYPE html>
<html lang="en">
<head>
	<title>TMS Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="Login/images/icons/logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('Login/images/icons/789.jpeg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" id="loginForm" method="post">
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23">
						<span for="email" class="label-input100">Email</span>
						<input class="input100" type="email" id="email" name="email" placeholder="Type your Email" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span for="password" class="label-input100">Password</span>
						<input class="input100" type="password" id="password" name="pass" placeholder="Type your password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
						<a href="FAQ.php">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Reach Mobizz Engineering (Pvt) Ltd.
						</span>
					</div>

					<div class="flex-c-m">
						<a href="https://www.facebook.com/mobizzelite/" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="https://twitter.com/mobizzelite?lang=en" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="https://www.mobizz.lk/" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>

	
<!--===============================================================================================-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/bootstrap/js/popper.js"></script>
	<script src="Login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/daterangepicker/moment.min.js"></script>
	<script src="Login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="Login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script>
    $(document).ready(function () {
    $("#loginForm").submit(function (e) {
        e.preventDefault();

        var formData = {
            email: $("#email").val(),
            password: $("#password").val()
        };

        $.ajax({
          type: "POST",
          url: "login_process.php",
          data: formData,
          success: function (response) {
              if (response === "success-admin") {
                  Swal.fire({
                      icon: 'success',
                      title: 'Admin Login Successful',
                      showConfirmButton: false,
                      timer: 1500
                  });

                  setTimeout(function () {
                      // Redirect to admin dashboard
                      window.location.href = "TMS-admin/index.php";
                  }, 1500);
              } else if (response === "success-employee") {
                  Swal.fire({
                      icon: 'success',
                      title: 'Login Successful',
                      showConfirmButton: false,
                      timer: 1500
                  });

                  setTimeout(function () {
                      // Redirect to employee dashboard
                      window.location.href = "TMS-employee/index.php";
                  }, 1500);
              } else {
                  Swal.fire({
                      icon: 'error',
                      title: 'Login Error',
                      text: response
                  });
              }
            },
            error: function () {
              Swal.fire({
                  icon: 'error',
                  title: 'Error',
                  text: 'An unexpected error occurred.'
              });
            }
          });
      });
  });

  </script>

</body>
</html>