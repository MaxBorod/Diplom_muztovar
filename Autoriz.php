<?php session_start(); 
$host='localhost';
$database='muztovar';
$user='root';
$password='';
$link=mysqli_connect($host, $user, $password, $database) or die (“ошибка”. mysqli_error($link)); 

if(!empty($_POST['login']) && !empty($_POST['password_user'])) {	
  
  $login = $_POST['login']; 
  $password_user =$_POST['password_user'];
 
$query="Select login,password_user From klient Where login='$login'&& BINARY password_user='$password_user'";
$result=mysqli_query($link, $query);
if (mysqli_num_rows($result)){
$_SESSION['login']=$login;
header("Location: Личный_кабинет.php");
}
else{
$_SESSION['login']='er login';
header("Location: Авторизация.html");
mysqli_close($link);
}
	 }
	 else{
		 echo "Ты даже не даже!!!";
		 header("Location: Авторизация.html");
	 }
?>
