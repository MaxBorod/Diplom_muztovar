<?php 
	$host='localhost';
$database='muztovar';
$user='root';
$password='';
$login=$_SESSION["login"];
$link=mysqli_connect($host,$user,$password,$database)or die("ошибка".mysqli_error($link));

  $id_basket = $_POST['id_basket']; 
 
$query="DELETE FROM order_product WHERE id_basket = '$id_basket'";
$result=mysqli_query($link, $query);
if ($result){

header("Location: Корзина.php");
}
else{

header("Location: Корзина.php");
mysqli_close($link);
}
	?>