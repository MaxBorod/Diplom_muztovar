<!DOCTYPE html>
<html class="h-100" lang="ru">
<?php session_start(); ?>
<head>
<title>Корзина</title><script src="js/script.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link rel="stylesheet" href="css/style.css" type="text/css"/>
 
<link type="image/svg" href="img/pngwing.com_2.png" rel="shortcut icon">

</head>

<body class="d-flex flex-column h-100">
<div class=" fixed-top">
<nav class="navbar navbar-expand-lg navbar-light hedcolup">
<img src="img/pngwing.com_2.png" style="width:60px; height:75px;" alt="SUS">
  <a class="navbar-brand text font-italic disabled obvod"   href="главная_страница.php">Музтовар</a>
  <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
  <li class="nav-item">
    <form method="post" action="checkSession.php">
   <input type="submit" class="button_for_search btn"   value="Личный кабинет" />
    <form>
  </li>
  <li><a class="nav-link text-dark"  href="#"></a></li>
  <li  class="nav-item "><form>
  <div class="input-group mb-3">
              <input class="place_for_search form-control" type="search"  value="" placeholder="Поиск" autofocus>  
<div class="input-group-append">			  
              <input class="button_for_search btn btn-dark" type="submit" onclick="javascript: FindOnPage('text-to-find',true); return false;" value="Поиск" title="Начать поиск">
             </div></div></form>
	</li></ul>
</nav>
<nav class="navbar navbar-expand-lg  navbar-light hedcoldown">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
  
    <ul class="navbar-nav mx-auto  top_menu" >
       <li class="mx-auto  col-lg-auto nav-item dropdown ulseclist">
        <button class="  nav-link dropdown-toggle px-2 list_drop_top  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Каталог
        </button>
		
        <div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" >
          <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
		  <input  type="text" value="Винил" name="carrier" hidden/>Винил</button></form>
           <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
		   <input type="text" value="CD-диск" name="carrier" hidden/>CD-диски</button></form>
            <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
			<input  type="text" value="DVD-диск" name="carrier" hidden/>DVD-диски</button></form>
		    <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
			<input  type="text" value="Blu-ray" name="carrier" hidden/>Blu-ray</button></form>
		    <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
			<input type="text" value="Кассета" name="carrier" hidden/>Кассеты</button></form>
	   </div>
	  
	    </li>
	  <li class="nav-item ulseclist">
        <a class="nav-link text-dark"  href="О_нас.html">О нас</a>
      </li>
	  <li class="nav-item ulseclist">
        <a class="nav-link text-dark"  href="Контакты.html">Контакты</a>
      </li>
      <li class="nav-item ulseclist">
        <a class="nav-link text-dark"  href="Доставка.html">Доставка</a>
      </li>
	  <li class="nav-item ">
	  <form method="post" action="checkSessionBasket.php">
        <button class="buttonChangeColor ulseclist btn btn-lg text-dark "  href="Корзина.php">Корзина</button>
		 </form>
      </li>
	  <li class="nav-item ulseclist">
        <a class="nav-link text-dark"  href="Акции.php">Акции</a>
      </li>
    </ul>
    
	   </div>
</nav>
 </div>
 <div class='flex-shrink-0'>
   <script src="js\script.js"></script><br><br><br><br><br><br><br><br>
  <div class="strike">
   <span>Корзина</span>
</div><br>

<?php
$host='localhost';
$database='muztovar';
$user='root';
$password='';
$login=$_SESSION["login"];
$link=mysqli_connect($host,$user,$password,$database)or die("ошибка".mysqli_error($link));
$query_basket="select id_basket from klient where login='$login'";
$result_basket = mysqli_query($link,$query_basket);
if($result_basket)
{
    while($row = mysqli_fetch_assoc($result_basket))
    {
       $id_basket = $row['id_basket']; 
        
    }
}

$query_order = "Select * From order_product Where id_basket='$id_basket'";
$result_order = mysqli_query($link,$query_order) or die("Ошибка".mysqli_error($link));


print ("
<table class='tabelbor ' align=center  cellpadding=10>
<tr style='border-bottom:4px white' class='hedcoldown' align='center'>
<td>Номер</td>
<td>Название</td>
<td>Изображение</td>
<td>Цена</td>
<td>Удалить?</td>
</tr>");
$SummPrice = 0;
while ($a=mysqli_fetch_array($result_order))
{   $id_order=$a['id_order'];
    $id_product=$a['id_product'];
	$id_basket=$a['id_basket'];
	$query_order_product = "Select Name,Adress_img,Price From product Where id_product='$id_product'";
$result_order_product = mysqli_query($link,$query_order_product) or die("Ошибка".mysqli_error($link));
if($result_order_product)
{ 
	
    while($row = mysqli_fetch_assoc($result_order_product))
    {
       $Name = $row['Name']; 
       $Adress_img = $row['Adress_img'];
	   $Price = $row['Price'];
	   $SummPrice += $Price;
    }
}
 print("<tr align='center'><form action='Delete.php' method='post' >
    <td id='$id_order'>$id_order</td>
    <td>$Name</td>
	<td class='orderproduct' ><img  src='$Adress_img'/></td>
	<td>$Price</td>
    <td><button class='btn btn-outline-danger' type='submit' value='$id_order' name='id_order'>удалить</button></td>
    </form>");
   
    print("</tr>");
}
  
print ("</table>");
print("<form action='Delete_order.php' method='post' ><div class='m-2 d-flex justify-content-end'>
<div class='m-2 top_menu'>Сумма:</div>
<input type='text' class='' value='$SummPrice руб.' disabled/>
<button class='btn btn-outline-primary ' type='submit' value='$id_basket' name='id_basket'>Оформить заказ</button></div></form>");
mysqli_close($link);

?>
<!-- Скрипт для поиска -->
 <script>
 
			var input,search,pr,result,result_arr, locale_HTML, result_store;

function func() {
 	locale_HTML = document.body.innerHTML;   // сохраняем в переменную весь body (Первоначальный)
}
setTimeout(func, 1000);  //ждем подгрузки Jsona и выполняем

function FindOnPage(name, status) {

	input = document.getElementById(name).value; //получаем значение из поля в html
	
	if(input.length<3&&status==true)
	{
		alert('Для поиска вы должны ввести три или более символов');
		function FindOnPageBack() { document.body.innerHTML = locale_HTML; }
	}
	
	if(input.length>=3)
	{
		function FindOnPageGo() {

			search = '/'+input+'/g';  //делаем из строки регуярное выражение
			pr = document.body.innerHTML;   // сохраняем в переменную весь body
			result = pr.match(/>(.*?)</g);  //отсекаем все теги и получаем только текст
			result_arr = [];   //в этом массиве будем хранить результат работы (подсветку)

			var warning = true;
			for(var i=0;i<result.length;i++) {
				if(result[i].match(eval(search))!=null) {
					warning = false;
				}
			}
			if(warning == true) {
				alert('Не найдено ни одного совпадения');
			}

			for(var i=0; i<result.length;i++) {
				result_arr[i] = result[i].replace(eval(search), '<span style="background-color:yellow;">'+input+'</span>'); //находим нужные элементы, задаем стиль и сохраняем в новый массив
			}
			for(var i=0; i<result.length;i++) {
				pr=pr.replace(result[i],result_arr[i])  //заменяем в переменной с html текст на новый из новогом ассива
			}
			document.body.innerHTML = pr;  //заменяем html код
		}
	}
	function FindOnPageBack() { document.body.innerHTML = locale_HTML; }
	if(status) { FindOnPageBack(); FindOnPageGo(); } //чистим прошлое и Выделяем найденное
	if(!status) { FindOnPageBack(); } //Снимаем выделение
	setTimeout(function(){
	location.reload();
}, 15000);
}
			</script>
			</div>
			<footer class=" d-flex flex-wrap mt-auto justify-content-between align-items-center py-3  border-top hedcolup ">
			 <div  class="container-fluid" >
			 <div class="row">
		<div class="col-lg-3">	 
    <p class="text-muted"><img src="img/pngwing.com_2.png" style="width:60px; height:75px;margin-top:-3%;" alt="SUS">
	<a class="navbar-brand text font-italic disabled obvod" href="главная_страница.php">Музтовар</a></p>
	
 </div>
 <div class="col-lg-4">
 <a class="navbar-brand text" >Тел. +7 (911) 552-34-94</a>
	<br><a class="navbar-brand text" >Эл.почта - muztovar5@yandex.ru</a><br>
	<a class="navbar-brand text" >Адрес - Ярославль, ул. Чайковского 55,<br> 1 этаж.</a>
 </div>
  <div class="col-lg-5">
  <div class = "row justify-content-end">
    <ul class="nav  justify-content-end">
	  
      <li class=" col-lg-auto nav-item dropdown  menu_font_el ">
        <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  mt-1  mb-3 text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Каталог
        </button>
		
        <div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" >
          <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
		  <input  type="text" value="Винил" name="carrier" hidden/>Винил</button></form>
           <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
		   <input type="text" value="CD-диск" name="carrier" hidden/>CD-диски</button></form>
            <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
			<input  type="text" value="DVD-диск" name="carrier" hidden/>DVD-диски</button></form>
		    <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
			<input  type="text" value="Blu-ray" name="carrier" hidden/>Blu-ray</button></form>
		    <form action="Каталог.php" method="post"><button class = "dropdown-item" type="submit">
			<input type="text" value="Кассета" name="carrier" hidden/>Кассеты</button></form>
	   </div>
	  
	    </li>
		
	   	
	   <li class="col-lg-auto font-weight-bold ">
      <div class="nav-item menu_font_el"><a href="Доставка.html" class="nav px-2 mt-1 mb-3 text-dark ">Доставка</a></div>
	  </li>
	  <li class="col-lg-auto font-weight-bold ">
      <div class="nav-item "><form method="post" action="checkSession.php">
   <input type="submit" class=" buttonUnderline menu_font_el px-2 btn text-dark font-weight-bold mb-3"   value="Личный кабинет" >
    </form></div>
	  </li>
	  <li class="col-lg-auto font-weight-bold ">
      <div class="nav-item menu_font_el"><a href="Акции.php" class="nav mt-1 px-2 mb-3 text-dark ">Акции</a></div>
  
	   </li>
    </ul>
	</div></div></div></div>
  </footer>

</body>
</html>