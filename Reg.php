<?php session_start(); 
$host='localhost';
$database='muztovar';
$user='root';
$password='';
$link=mysqli_connect($host, $user, $password, $database) or die (“ошибка”. mysqli_error($link)); 

if(!empty($_POST['surname']) && !empty($_POST['name']) && !empty($_POST['patronymic'])
 && !empty($_POST['nuber_phone'])&& !empty($_POST['mail_user']) && !empty($_POST['login']) 
 && !empty($_POST['password_user']) && !empty($_POST['rep_password_user'])) {	
  $surname = $_POST['surname'];
  $name = $_POST['name'];
  $patronymic = $_POST['patronymic'];
  $nuber_phone = $_POST['nuber_phone'];
  $mail_user = $_POST['mail_user'];
  $login = $_POST['login']; 
  $password_user = $_POST['password_user'];
  $rep_password_user =$_POST['rep_password_user'];
  $id_role='2';
$query="INSERT INTO klient (surname,name,patronymic,nuber_phone,mail_user,login,password_user,id_role) VALUES 
('$surname', '$name', '$patronymic', '$nuber_phone', '$mail_user', '$login', '$password_user','$id_role')";
$result=mysqli_query($link, $query);

if ($result){
	$_SESSION['login']=$login;
header("Location: Личный_кабинет.php");
mysqli_close($link);
}
	 }
	 else{
		 echo "Ты даже не даже!!!";
		 header("Location: Регистрация.html");
	 }
?>