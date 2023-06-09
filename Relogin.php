<?php session_start(); 
$host='localhost';
$database='muztovar';
$user='root';
$password='';
$link=mysqli_connect($host, $user, $password, $database) or die (“ошибка”. mysqli_error($link)); 

if(!empty($_POST['id']) &&!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['patronymic'])
 && !empty($_POST['nuber_phone'])&& !empty($_POST['mail_user']) && !empty($_POST['login']) 
 && !empty($_POST['password_user'])) {	
  $id = $_POST['id'];
  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $patronymic = $_POST['patronymic'];
  $nuber_phone = $_POST['nuber_phone'];
  $mail_user = $_POST['mail_user'];
  $login = $_POST['login']; 
  $password_user = $_POST['password_user'];
  
$query="Update klient Set  surname = '$surname',name = '$name',patronymic = '$patronymic'
,nuber_phone = '$nuber_phone',mail_user = '$mail_user',
login = '$login',password_user = '$password_user' where id='$id'";
$result=mysqli_query($link, $query);
if ($result){
	$_SESSION['login']=$login;
header("Location: Личный_кабинет.php");
mysqli_close($link);
}
else{
		 echo "Ты даже не даже!!!";
		
	 }
	 }
	 else{
		 echo "Ты даже не даже!!!";
		 header("Location: Корзина.php");
	 }
?>