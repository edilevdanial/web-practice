<?php
$connection = mysqli_connect('localhost','root','root','practice');  /*хост атауы, учетная запись, пароль, БД-аты */
$select_db = mysqli_select_db($connection, 'users'); /*practice - таблица атауы*/

if (isset($_POST["login"]) and isset($_POST["password"])){
	$login = $_POST["login"];
	$password = $_POST["password"];
	#$password = password_hash($password, PASSWORD_DEFAULT);
	$password = md5($password."ghjsfkld2345");
	$query = "SELECT * FROM users WHERE login = '$login' and password = '$password'";
	$rezult = mysqli_query($connection,$query)or die(mysqli_error($connection));
    $count = mysqli_num_rows($rezult);
	if ($count == 1){
		$_SESSION['login'] = $login;
        $login = $_SESSION['login'];
        header('Location: /html/success.html');
	}
	else{
        header('Location: /html/notFound.html');
    }
}


#if(isset($_SESSION['username'])){
#$username = $_SESSION['username'];
#echo "hello".$username."";
#echo "вы вошли";
#echo "<a href='logal.php' class='btn btn-to btn-primary'>Logout</a>";
#} 
 ?>