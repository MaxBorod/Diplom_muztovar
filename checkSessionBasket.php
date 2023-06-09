<?php session_start();
if(isset($_SESSION['login'])){
	 header("Location: Корзина.php");
	 
 }	
 else{
	  header("Location: Авторизация.html");
	  session_destroy();
 }
 ?>