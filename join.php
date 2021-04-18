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
        $query = mysqli_query($con, "SELECT * FROM users");
        $stroka = $query->fetch_assoc();
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
		<div class="start_block">
			<div class="join_block col-6 mx-auto">
				<form action="check.php" method="POST">
					<input class="join_input col-6" type="" name="login" placeholder="Логин">
					<input class="join_input col-6" type="" name="password" placeholder="Пароль">
					<button class="join_btn col-6 btn_text">Войти</button>
				</form>
				<a class="links" href="add.php">
					<div class="register_block col-6">
						<h1 class="register_text">Регистрация</h1>
					</div>
				</a> 
			</div>
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
</script>
</body>
</html>