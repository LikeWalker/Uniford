<?php 
	session_start();
 ?>
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
				<h1 class="test_text">Личный Кабинет</h1>
			</div>
			<div class="personal_block_row col-10 mx-auto">
				<div class="personal_block_info col-4">
					<div style="background-size: 100% 100%; background-image: url(<?php echo $stroka['avatar'];
						?>);" class="avatar_block col-6 mx-auto border-circle">
					</div>
					<div class="info_block col-11 mx-auto">
						<div class="fio_block border">
							<h3 class="info_text">ФИ:</h3>
							<h3 class="info_text"><?php $all = $stroka['surname']." ".$stroka['name']; 
							echo $all;
							?></h3>
						</div>
						<div class="age_block">
							<h3 class="info_text">Возраст:</h3>
							<h3 class="info_text"><?php echo $stroka['age'];
							?></h3>
						</div>
						<div class="pol_block">
							<h3 class="info_text">Пол:</h3>
							<h3 class="info_text"><?php echo $stroka['pol'];?></h3>
						</div>
					</div>
				</div>
				<div class="personal_block_lvl col-6">
					<div class="lvl_block">
						<div class="lvl_block_text col-10 mx-auto">
							<h1 class="lbl_text">Уровень вашей информационной</h1>
							<h1 class="lvl_text">безопасности по итогам теста</h1>
						</div>
						<div class="lvl_block_text_2 col-10 mx-auto">
							<h1 class="lvl_text">Информационная безопасность</h1>
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
</script>
</body>
</html>