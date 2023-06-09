<?php session_start(); 
$host='localhost';
$database='muztovar';
$user='root';
$password='';
$link=mysqli_connect($host, $user, $password, $database) or die (“ошибка”. mysqli_error($link)); 

if(!empty($_POST['roleOption']) && !empty($_POST['id_pols'])) {	
  
  $id_role = $_POST['roleOption']; 
  $id_pols =$_POST['id_pols'];
 
$query="Update klient Set  id_role = '$id_role' where id='$id_pols'";
$result=mysqli_query($link, $query);
if ($result){

header("Location: Polsovateli_sait.php");
}
else{
header("Location: Polsovateli_sait.html");
mysqli_close($link);
}
	 }
	 else{
		 echo "Ты даже не даже!!!";
		 header("Location: Polsovateli_sait.html");
	 }
?>