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
$query_basket="Select id From klient Where login='$login'";
$result_basket = mysqli_query($link,$query_basket);
if($result_basket)
{
    while($row = mysqli_fetch_assoc($result_basket))
    {
       $id_basket = $row['id']; 
        
    }
}
 
$query_create_basket = "INSERT INTO Basket (id_basket) VALUES ('$id_basket')";
$result_cr_bas = mysqli_query($link, $query_create_basket);
$query_bas_kl="UPDATE klient Set id_basket='$id_basket'  Where id='$id_basket'";
$result_bas_kl=mysqli_query($link,$query_bas_kl);
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