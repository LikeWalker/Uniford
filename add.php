<?php
	$con = mysqli_connect('127.0.0.1:3306', 'root', '', 'Uniford'); 
	$text = "INSERT INTO users (id, login, password, phone, name, surname, age, pol, mail, avatar)  VALUES ('{$_POST['id']}', '{$_POST['login']}', '{$_POST['password']}', '{$_POST['phone']}', '{$_POST['name']}', '{$_POST['surname']}', '{$_POST['age']}', '{$_POST['pol']}', '{$_POST['mail']}', '{$_POST['avatar']}')";
	$zapros_dlya_vvoda = mysqli_query($con, $text);
	header("Location: personal.php");
?>