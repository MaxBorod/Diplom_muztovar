<?php session_start();
if(isset($_SESSION['login'])){
	 header("Location: Личный_кабинет.php");
	 
 }	
 else{
	  header("Location: Авторизация.html");
	  session_destroy();
 }
 ?>