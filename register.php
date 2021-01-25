<?php

//$connection  = @mysqli_connect('localhost', 'root', '', 'practice') or die('Ошибка соединения с БД');
//mysqli_set_charset($practice, "utf8") or die('Не установлена кодировка');
$connection = mysqli_connect('localhost','root','root','practice');  /*хост атауы, учетная запись, пароль, БД-аты */
$select_db = mysqli_select_db($connection, 'users'); /*practice - таблица атауы*/

if (isset($_POST["login"]) && isset($_POST["password"]) && isset($_POST["email"])){
	$login = $_POST["login"];
    $password = $_POST["password"];
    $email = $_POST["email"];
	$password = md5($password."ghjsfkld2345");
	#$password = password_hash($password, PASSWORD_DEFAULT);

	$query="INSERT INTO users (login, password, email) VALUES ('$login','$password','$email')";
	$rezult = mysqli_query($connection, $query);
}

header('Location: /')

 ?>