<?php 
	session_start();//начинаем сессию пользователя
	$con = mysqli_connect('127.0.0.1:3306', 'root','','Uniford');
	$query = mysqli_query($con, "SELECT * FROM users WHERE (login='{$_POST['login']}' AND password='{$_POST['password']}')");
	$stroka = $query->fetch_assoc();
	$num = mysqli_num_rows($query);
	if($num>0){
		$_SESSION['id'] = $stroka['id'];// сохранили глобально ID пользователя который авторизовался
		$_SESSION['name'] = $stroka['name'];
		$_SESSION['pol'] = $stroka['pol'];
		$_SESSION['age'] = $stroka['age'];
		$_SESSION['surname'] = $stroka['surname'];
		$_SESSION['avatar'] = $stroka['avatar'];
		$_SESSION['email'] = $stroka['email'];
		$_SESSION['phone'] = $stroka['phone'];
		$_SESSION['password'] = $stroka['password'];
		header("Location: personal.php");
	} else{
		header("Location: join.php");
	}
?>
