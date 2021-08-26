<!DOCTYPE html>
<html lang="uk" class="light">
<head>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>VueJS - основи</title>

	<link type="text/css" rel="stylesheet"
		href="../files/css/main.css"
		media="all" />
	<link type="text/css" rel="stylesheet"
		href="../files/css/fonts.css"
		media="print" />

</head>

<body class="html not-front not-logged-in no-sidebars page-node page-node- page-node-122 node-type-article i18n-uk" >
	<div class="wrapper">
		<header id="header" class="header" role="banner">
			<div class="max-width clearfix">

				<div class="panel-pane pane-block pane-system-main-menu">
					<img src="../user.png" alt="">
				</div>

				<a href="../index.php" class="logo">
					<img src="../logo.jpg" width="150" height="30" alt="Лого">
				</a>
			</div>

		</header>


		<main class="main-content js-main-content" role="main">
			<div class="max-width clearfix">

				<section class="max-width-col-8" >
					<h1 class="article-title" id="gerund">
						Основи <span class="title-comment">Увага!</span>
					</h1>

					<div class="content">
						<article class="article-content ll-text">
							<p class="alarm">На привеликий жаль, щоб опанувати основи Vue, вам потрібні хоча б середні знання HTML, CSS та JavaScript. Якщо ви зовсім нещодавно у frontend-розробці, це може бути не найкращою ідеєю для вивчення фреймворку в якості Вашого першого кроку — опануйте основи та повертайтесь) </p>
						</article>

						<div
							class="paragraphs-items paragraphs-items-field-paragraph paragraphs-items-field-paragraph-paragraphs-editor-preview paragraphs-items-paragraphs-editor-preview">
							<div class="field field-name-field-paragraph field-type-paragraphs field-label-hidden">
								<div class="field-items">
									<div class="field-item even">
										<h2 class="caption-title" id="formi-gerundiia" about="" typeof="">

											Підкючення</h2>
									</div>
									<div class="field-item odd">
										<article class="paragraph" about="" typeof="">
											<div class="paragraph-content ll-text">
												<p>Щоб почати роботу з Vue, потрібно для початку <strong>підлючити</strong> його, це можна виконати двома способами, але для початку будемо використовувати один, найпростіший - через <strong>посилання.</strong></p>
												<code class="center" style="padding-bottom: 1.5rem;">
<span class="tag">script <span class="atr">src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"</span></span></span><span class="tag">/script</span></code>
											</div>
										</article>
									</div>
									<div class="field-item even">
											<h2 class="caption-title" id="formi-gerundiia" about="" typeof="">Робота</h2>
											<article class="paragraph" about="" typeof="">
												<div class="paragraph-content ll-text">
													<p>Після того як був підключений Vue, як показано в прикладі вище, потрібно створити елемент, де буде промальовуватись Vue.</p>
<code>
	<span class="tag">div id="<span class="vueEl">app</span>"</span>
		<span class="textInCode">{{ text }}</span>
	<span class="tag">/div</span>
	
</code>
												</div>
												<div class="paragraph-content ll-text mt10">
													<p>Далі потрібно створити екземпляр Vue, прив'язати його до елементу (у нашому випадку div з ідентифікатором "app").</p>
													<p>В об'єкті data створюємо змінну, яка буде тримати в собі текст який потрібно відобразити.</p>
													<p>Для відображженя елементу використовуємо подвійні лапки {{ }}</p>
<code>											
	<span class="art">var</span> app = <span class="atr">new</span> Vue ({
		el: <span class="vueEl">'#app'</span>,
		data: {
		<span class="textInCode">text: </span> <span class="vueEl">'Вчимо Vue'</span>
		}
	})

</code>
												</div>
											</article>
									</div>
									<div class="field-item odd">
										<article class="paragraph" about="" typeof="">
											<div class="paragraph-content ll-text">
												<p>Результат:</p>
										<div class="console">Вчимо Vue</div>
											</div>
										</article>
									</div>

									<div class="field-item even">
										<h2 class="caption-title" id="formi-gerundiia" about="" typeof="">Щоб продовжити, зробіть задачу :)</h2>
										<div class="paragraph-content ll-text">
											<p>Впишіть пропущену частину коду, щоб додаток відобразив повідомлення</p>
											<code>
	<span class="tag">div id="<span class="vueEl">app</span>"</span>
		<span class="textInCode">{{ message }}</span>
	<span class="tag">/div</span>
											</code>
										</div>
										<div class="paragraph-content ll-text mt10">
											<p></p>
											<code>											
	<span class="art">var</span> app = <span class="atr">new</span> Vue ({
		el: <span class="vueEl">'#app'</span>,
		data: {
		<input type="text" id="answer" bd-id="1">:<span class="vueEl"> 'Мій перший крок!'</span>
		}
	})
											</code>
											<div id="error"></div>
											<div style="text-align: center;"><a id="checkBtn" class="pressed-button">Перевірити</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>

	</div>


	<footer id="footer-site" class="footer" role="contentinfo">
		<div class="footer-wrapper max-width clearfix" id="footer-wrapper">
			<div class="footer-text">
			</div>
		</div>
	</footer>
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
	<script>
		document.querySelector('#answer').addEventListener('input', () => {
			error.style.display = 'none';
		});

		document.querySelector('#checkBtn').addEventListener('click', () => {
		    $.ajax({
		        type: "POST",
		        url: "../php/check_answer.php",
		        dataType: "text",
		        data: {
		            val: document.querySelector('#answer').value,
		            bnt_id: document.querySelector('#answer').getAttribute('bd-id')
		        },
		        success: function (data) {
		            if (data == 1) {
		                window.location.href = window.location.origin + '/pages/loop-and-conditions.php';
						localStorage.themes_completed = 1;
		            }else {
		                error.style.display = 'block';
						error.innerHTML = data;
		            }
		        }
		    });
		});
	</script>
</body>

</html>