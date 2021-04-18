<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root','','Uniford');
    $questions = mysqli_query($con, "SELECT * FROM questions");
    ?>
	<div class="wrapper">
		<header class="header">
			<div class="container col-12">
				<div class="header_row col-12">
					<div class="header_logo col-2">
					</div>
					<div class="header_slogan col-2">
						<h4 class="header_text">Смотри в будущее с Uniford’ом!</h4>
					</div>
					<div class="btn_div">
						<button class="btn_modal"><img class="img" src="img/3.png"></button>
					</div>
				</div>
			</div>
		</header>
		<div class="menu_window col-4">
				<div class="menu_header col-12">
					<div class="menu_cancel_box">
						<button class="cancel_btn"><img class="cancel_btn_image mt-1" src="img/cancel.png"></button>
					</div>
					<div class="menu_blocks_container">
						<a class="links" href="register.php">
							<div class="menu_block1 col-10 mx-auto border">
								<h1 class="menu_text">Вход</h1>
							</div>
						</a>
						<a class="links" href="tests.php">
							<div class="menu_block col-10 mx-auto border">
								<h1 class="menu_text">Тесты</h1>
							</div>
						</a>
						<a class="links" href="articles.php">
							<div class="menu_block col-10 mx-auto border">
								<h1 class="menu_text">Статьи</h1>
							</div>
						</a>
					</div>
				</div>
			</div>
		<div class="test_block col-12">
			<div class="test_name_block col-10 mx-auto">
				<h1 class="test_text">Информационная</h1>
				<h1 class="test_text">Безопасность</h1>
			</div>
			<div class="test1">
				<div class="test_question_block col-8 mx-auto">
					<h1 class="question_text">1/10. Вы используете везде одинаковые пароли для входа в цифровую среду?</h1>
				</div>
				<div class="answers_block col-11 mx-auto">
					<div class="answers_row col-12">
						<div class="answers1 col-5 false">
							<h1 class="answers_text">1. Да</h1>
						</div>
						<div class="answers2 col-5 true">
							<h1 class="answers_text">2. Нет</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script type="text/javascript">
	let header_btn = document.querySelector(".btn_modal");
	let text_center = document.querySelector(".main_text_center");
	let menu_window = document.querySelector(".menu_window");
	let cancel_btn = document.querySelector(".cancel_btn");

	header_btn.onclick = function(){
		menu_window.style.left = "1243" + "px";
		menu_window.style.transition = "1s";
		text_center.style.left = "-20" + "px";
		text_center.style.transition = "1s";
	}
	cancel_btn.onclick = function(){
		menu_window.style.left = "2000" + "px";
		menu_window.style.transition = "1s";
		text_center.style.left = "550" + "px";
		text_center.style.transition = "1s";
	}
	<?php
			for($i=0;$i< $questions->num_rows ;$i++){
		 	$stroka = $questions->fetch_assoc();
	 	?>
		let test<?php
			$stroka["id"];
		?> = document.querySelector('.test<?php
			$stroka["id"];
		?>')
		let true_answer<?php
			$stroka["id"];
		?> = document.querySelector('.true<?php
			$stroka["id"];
		?>')
		let false_answer<?php
			$stroka["id"];
		?> = document.querySelectorAll('.false<?php
			$stroka["id"];
		?>')
		let testIntroduction = document.querySelector('.introduction');
		let future = document.querySelector('.future');
		let testAssessment = document.querySelector('.assessment');
		let scores = document.querySelector('.score');
		let yes = 1;
		let score = 0;
		let scorePoints = function(){
		score = score + yes;
		scores.innerHTML = score;
		}
		let none<?php
			$stroka["id"];
		?> = function(){
			test<?php
			$stroka["id"];
		?>.style.display = "none";
			test<?php
			$stroka["id"];
		?>.style.display = "block";
		}
		let beaty<?php
			$stroka["id"];
		?> = function(){
			test<?php
			$stroka["id"];
		?>.style.opacity = 1;
			test<?php
			$stroka["id"];
		?>.style.transition = 2 + "s";
		}
		let beaty10 = function(){
			testIntroduction.style.display = "block";
			if (score4 <= 5) {
				future.style.display = "none";
				testAssessment.innerHTML = "нуу, боюсь тебя огорчить, но тебя ждёт Кокушибо, чтобы с тобой поговорить.";
			}
			if (score4 >= 6) {
				futureDemon.style.display = "none";
				testAssessment.innerHTML = "неплохо, ты знаешь много о Танджиро Камадо, похвально.";
			}
			if (score4 >= 8) {
				futureDemon.style.display = "none";
				testAssessment.innerHTML = "чтоооооо?! Откуда ты о нас так много знаешь?! вррпвавтпвоправывырааа!!!";
			}
		}
			testtrue<?php
			$stroka["id"];
		?>.onclick = function(){
				test<?php
			$stroka["id"];
		?>.style.opacity = 0;
				test<?php
			$stroka["id"];
		?>.style.transition = 2.5 + "s";
				testtrue<?php
			$stroka["id"];
		?>.style.color = "green";
				setTimeout(none<?php
			$stroka["id"];
		?>, 2000);
				setTimeout(beaty<?php
			$stroka["id"];
		?>, 2500);
				scorePoints();
			}
			for( let i = 0; i < testfalse<?php
			$stroka["id"];
		?>.length; i++){
		   		testfalse<?php
			$stroka["id"];
		?>[i].onclick = function(){
		   			test<?php
			$stroka["id"];
		?>.style.opacity = 0;
					test<?php
			$stroka["id"];
		?>.style.transition = 1.9 + "s";
					setTimeout(none<?php
			$stroka["id"];
		?>, 2000);
					setTimeout(beaty<?php
			$stroka["id"];
		?>, 2500);
		   		}
		 	}	
		<?php
			}
		?>
</script>
</body>
</html>