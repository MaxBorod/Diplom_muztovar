<?php session_start(); 
$host='localhost';
$database='muztovar';
$user='root';
$password='';
$link=mysqli_connect($host, $user, $password, $database) or die (“ошибка”. mysqli_error($link)); 
if(isset($_POST['button1'])) {
   $_SESSION['tovar'] = $_POST['id_product'];
   header("Location: Product_page.php");
} 
elseif(isset($_POST['button2'])) { if(isset($_SESSION['login'])){
    if(!empty($_POST['id_product'])) {	
  
  $login = $_SESSION['login']; 
  $id_product =$_POST['id_product'];
 
$query="Select id_basket From klient Where login='$login'";
$result=mysqli_query($link, $query);
if($result)
{
    while($row = mysqli_fetch_assoc($result))
    {
       $id_basket = $row['id_basket']; 
       
    }
}
$query_order="Insert Into order_product (id_basket,id_product) VALUES ('$id_basket','$id_product')";
$result_order=mysqli_query($link, $query_order);
if($result_order)
{
    header("Location: Корзина.php");
}}
} else{
	 header("Location: Авторизация.html");
}}
else{
	echo("RFFFFK");
	
}
?>