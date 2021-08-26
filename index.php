<?php

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

	</style>

</head>

<body class="html front not-logged-in no-sidebars page-frontpage i18n-uk" style="background-color: #e4d5f5;">
	<div class="wrapper">
		<header id="header" class="header" role="banner" style="background-color: #746e7a;">
			<div class="max-width clearfix">
				<div class="panel-pane pane-block pane-locale-language">

				</div>
				<div class="panel-pane pane-block pane-system-main-menu">
					<img src="user.png" alt="">
				</div>
				<div class="panel-pane pane-block pane-search-form header-search-form">

				</div>
				<a href="#" class="logo">
					<img src="logo.jpg" width="150" height="30" alt="EasyEnglish – Граматика англійської мови">
				</a>
			</div>

		</header>


		<main class="main-content js-main-content" role="main" style="padding-top: 70px;">
			<div class="max-width clearfix" style="    background-color: rgb(255, 255, 255);
			box-shadow: -2px 9px 30px 46px rgb(255 255 255);
			font-family: 'f' !important; ">
				<h1 class="title-h1" style="text-align: center; margin-bottom: 50px;">Пункти вивчення</h1>
				<div
					class="view view-front-page view-id-front_page view-display-id-page view-dom-id-5f25aad71f861117b2d1a11c283f0b07">

					<div class="view-content clearfix">
						<div class="fp-list">
							<h3 class="title">Основи</h3>
							<ul>
								<!-- <li class="item" data-level="intermediate">
									<a href="pages/introduction.php">
										VueJs - Введення </a>
								</li> -->

								<li class="item" data-level="intermediate">
									<a href="pages/foundations.php">
										 Основи</a>
								</li>

								<li class="item" data-level="pre-intermediate">
									<a href="pages/loop-and-conditions.php"  class="disabled" id="tema2">
										Умови та цикли </a>
								</li>


								<li class="item" data-level="intermediate">
									<a href="pages/user-input.php" class="disabled">
										Користувацьке введення </a>
								</li>

								<li class="item" data-level="pre-intermediate">
									<a href="pages/to-be.php" class="disabled">
										Робота з компонентами </a>
								</li>

							</ul>
						</div>
						<div class="fp-list">
							<h3 class="title">Поглиблене вивчення</h3>
							<ul>
								<li class="item" data-level="pre-intermediate">
									<a href="pages/future-continuous.php" class="disabled">Vue екземпляр</a>
								</li>

								<li class="item" data-level="intermediate">
									<a href="pages/future-in-the-past.php" class="disabled">Синтаксис шаблону</a>
								</li>

								<li class="item" data-level="pre-intermediate">
									<a href="pages/future-perfect.php" class="disabled">Обчислювані властивості та спостерігачі</a>
								</li>

								<li class="item" data-level="intermediate">
									<a href="pages/future-perfect-continuous.php" class="disabled">Класи та стилі</a>
								</li>

								<li class="item" data-level="elementary">
									<a href="pages/future-simple.php" class="disabled">Умовне промальовування</a>
								</li>

								<li class="item" data-level="intermediate">
									<a href="pages/have-something-done.php" class="disabled">Списки</a>
								</li>

								<li class="item" data-level="intermediate" class="disabled">
									<a href="pages/passive-voice.php" class="disabled">
										Обробка подій </a>
								</li>

							</ul>
						</div>
						<div class="fp-list">
							<h3 class="title">Задачі</h3>
							<ul>
								<li class="item" data-level="pre-intermediate">
									<a href="pages/can-could.php" class="disabled">Задачі 1</a>
								</li>
							</ul>
						</div>
						<script>
							// ця шняга накостиляна, убрать айдішнік у 2 тєми нада 
							if (localStorage.themes_completed == 1) {
								document.querySelector('#tema2').classList.remove('disabled');
							}
						</script>
</body>
</html>