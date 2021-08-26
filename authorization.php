<?php
	include_once "php/bd.php";
?>

<!DOCTYPE html>
<html lang="uk" class="light">

<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>VueJS - просто</title>

	<link type="text/css" rel="stylesheet"
		href="files/css/main.css"
		media="all" />
	<link type="text/css" rel="stylesheet"
		href="files/css/fonts.css"
		media="print" />
	
	<style>
        body {
        background-image: url(bg-01.jpg);
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        }
		@font-face {
			font-family: 'myFont';
			src: url(19760.otf);
		}



	</style>
	  <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="html front not-logged-in no-sidebars page-frontpage i18n-uk" style="background-color: #e4d5f5;">
	<div class="wrapper">
		<header id="header" class="header" role="banner" >
			<div class="max-width clearfix">
				<div class="panel-pane pane-block pane-locale-language">

				</div>
				<div class="panel-pane pane-block pane-system-main-menu">
						<img src="user.png" alt="">
				</div>
				<div class="panel-pane pane-block pane-search-form header-search-form">

				</div>
				<a href="index.php" class="logo">
					<img src="logo.jpg" width="150" height="30" alt="EasyEnglish – Граматика англійської мови">
				</a>
			</div>

		</header>

		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
					<form class="login100-form validate-form flex-sb flex-w">
						<span class="login100-form-title p-b-53">
							Авторизація
						</span>
				
						<div class="p-t-31 p-b-9">
							<span class="txt1">
								E-mail
							</span>
						</div>
						<div class="wrap-input100 validate-input" id="email-div" data-validate = "Пошта введена у невірному форматі">
							<input class="input100" type="email" name="username" id="email">
							<span class="focus-input100"></span>
						</div>
						
						<div class="p-t-13 p-b-9">
							<span class="txt1">
								Пароль
							</span>
	
							<!-- <a href="#" class="txt2 bo1 m-l-5">
								Forgot?
							</a> -->
						</div>
						<div class="wrap-input100 validate-input" id="password-div" data-validate = "Пароль обов'язковий">
							<input class="input100" type="password" name="pass" id="password">
							<span class="focus-input100"></span>
						</div>
	
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn" id="auth_btn">
								Авторизуватись
							</button>
						</div>
						<div id="error"></div>
						<div class="w-full text-center p-t-55">
							<span class="txt2">
								Не користувач?
							</span>
							<a href="registation.php" class="txt2 bo1">
								Зареєструйтесь зараз! 
							</a>
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

		<script>
			email_div = document.querySelector('#email-div');
			document.querySelector('#email').addEventListener('input', () => {
				email_div.classList.remove('alert-validate');
			});
			password_div = document.querySelector('#password-div');
			document.querySelector('#password').addEventListener('input', () => {
				password_div.classList.remove('alert-validate');
			});
			error = document.querySelector('#error');
			document.querySelector('#email').addEventListener('input', () => {
				error.style.display = 'none';
			});
			document.querySelector('#password').addEventListener('input', () => {
				error.style.display = 'none';
			});
			document.querySelector('#auth_btn').addEventListener('click', (event) => {
				event.preventDefault();
				if(validation_check()) {
    				$.ajax({
    				    type: "POST",
    				    url: "php/auth.php",
    				    dataType: "text",
    				    data: {
    				        email: document.querySelector('#email').value,
    				        password: document.querySelector('#password').value
    				    },
    				    success: function (data) {
    				        if (data == 1) {
    				            window.location.href = window.location.origin + '/index.php';
    				        }  else {							
								error.style.display = 'block';
								error.innerHTML = data;
							}
    				    }
    				});
				}
			});
		</script>
</body>

</html>