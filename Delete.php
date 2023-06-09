<?php session_start(); 
$host='localhost';
$database='muztovar';
$user='root';
$password='';$id_order='sdada';
$link=mysqli_connect($host, $user, $password, $database) or die (“ошибка”. mysqli_error($link)); 

if(!empty($_POST['id_order'])) {	
  
  $id_order = $_POST['id_order']; 
 
 
$query="DELETE FROM order_product WHERE id_order = '$id_order'";
$result=mysqli_query($link, $query);
if ($result){

header("Location: Корзина.php");
}
else{

header("Location: Корзина.php");
mysqli_close($link);
}
	 }
	 else{
		 echo "Ты даже не даже!!!";
		 print_r($id_order); 
	 }
?>