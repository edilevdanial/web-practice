<?php
    $connection = mysqli_connect('localhost','root','root','practice');  /*хост атауы, учетная запись, пароль, БД-аты */
    $select_db = mysqli_select_db($connection, 'checkout'); /*practice - таблица атауы*/
    
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["number"]) && isset($_POST["theme"])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $theme = $_POST["theme"];
    
        $query="INSERT INTO checkout (name, email, number, theme) VALUES ('$name','$email','$number','$theme')";
        $rezult = mysqli_query($connection, $query);
        header('Location: /html/success.html');
    }
    
?>