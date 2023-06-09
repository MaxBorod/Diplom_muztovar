<!DOCTYPE html>
<html lang="ru">
<?php session_start(); ?>
<head>
<title>Страница продукта</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport">
<link rel="stylesheet" href="css\style.css" type="text/css"/>
 <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
<link type="image/svg" href="img/pngwing.com_2.png" rel="shortcut icon">
 
</head>

<body>
<div class=" fixed-top">
<nav class="navbar navbar-expand-lg navbar-light hedcolup" >
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
              <input class="place_for_search form-control" type="search" id="text-to-find" value="" placeholder="Поиск" autofocus>  
<div class="input-group-append">			  
              <input class="button_for_search btn btn-dark" type="submit" onclick="javascript: FindOnPage('text-to-find',true); return false;" value="Поиск" title="Начать поиск">
             </div></div></form>
	</li></ul>
</nav>
<nav class="navbar navbar-expand-lg  navbar-light hedcoldown" >
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <ul class="navbar-nav mx-auto  top_menu" >
      <li class="mx-auto  col-lg-auto nav-item dropdown ulseclist">
        <button class="  nav-link dropdown-toggle px-2 list_drop_top  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
   <script src="js\script.js"></script><br><br><br><br><br><br>
  
 <?php
 $host='localhost';
 $database='muztovar';
 $user='root';
 $password='';
 
 $Product = $_SESSION["tovar"];
 $link=mysqli_connect($host,$user,$password,$database)or die("ошибка".mysqli_error($link));
 $query="select * from product Where id_product='$Product'";
 $result = mysqli_query($link,$query) or die("Ошибка".mysqli_error($link));
 		
 		
 while ($row=mysqli_fetch_array($result))
 {
 $id_product = $row['id_product'];
 $name=$row['Name'];
 $id_carrier =$row['id_carrier'];
 $id_group =$row['id_group'];
 $Count_carriers=$row['Count_carriers'];
 $id_genres=$row['id_genres'];
 $id_style=$row['id_style'];
 $Price=$row['Price'];
 $Discount=$row['discount'];
 $Adress_img=$row['Adress_img'];
 $youtube_link = $row['youtube_link'];
 $year_of_release=$row['year_of_release'];
 $query_group="select name from groups Where id_group='$id_group'";
 $result_group = mysqli_query($link,$query_group) or die("Ошибка".mysqli_error($link));
 while ($row=mysqli_fetch_array($result_group))
 {
 $name_group=$row['name'];	
 }
 $query_carrier="select name from data_carriers Where id_carrier='$id_carrier'";
 $result_carrier= mysqli_query($link,$query_carrier) or die("Ошибка".mysqli_error($link));
 while ($row=mysqli_fetch_array($result_carrier))
 {
 $name_carrier=$row['name'];	
 }
 $query_genre ="select name from genres Where id_genre='$id_genres'";
 $result_genre = mysqli_query($link,$query_genre) or die("Ошибка".mysqli_error($link));
 while ($row=mysqli_fetch_array($result_genre))
 {
 $name_genre=$row['name'];	
 }
 $query_style ="select name from style  Where id_style='$id_style'";
 $result_style = mysqli_query($link,$query_style) or die("Ошибка".mysqli_error($link));
 while ($row=mysqli_fetch_array($result_style ))
 {
 $name_style=$row['name'];	
 }
 
 $query_list ="select id_list from list_sounds  Where id_product='$id_product'";
 $result_list = mysqli_query($link,$query_list) or die("Ошибка".mysqli_error($link));
 while ($row=mysqli_fetch_array($result_list))
 {
 $id_list=$row['id_list'];	
 }
 
 
 
 
	print("
  <div class='container'><form  action='Order.php' method='post'>
   <input  name='id_product' value='$id_product'  type='hidden'/>
   <div class='form-group row'>
   
 <div class='col-md-auto m-3 imgsl '  id='Adress_img'>
 <img src='$Adress_img' disabled/>
  </div>
  
  <div class='col-lg mt-3 p-4 align='left''>
<div class='form-group row ' >
  <label class='col-sm-5 col-form-label'>Название:</label>
 <div class='col-sm' id='name'>
 <input type='text' value='$name' disabled/>
  </div>
  </div>
<div class='form-group row' >
   <label class='col-sm-5 col-form-label'>Тип носителя:</label>
   <div class='col-sm' id='name_carrier'>
   <input type='text' value='$name_carrier' disabled/>
   </div>
  </div>
<div class='form-group row '>
   <label class='col-sm-5 col-form-label'>Група:</label>
   <div class='col-sm' id='name_group'>
    <input type='text' value='$name_group' disabled/>
   </div>
  </div>
<div class='form-group row' >
   <label class='col-sm-5 col-form-label'>Число носителей:</label>
   <div class='col-sm' id='Count_carriers'>
    <input type='text' value='$Count_carriers' disabled/>
   </div>
 </div>
<div class='form-group row'>
   <label class='col-sm-5 col-form-label'>Жанр:</label>
   <div class='col-sm' id='name_genre'>
      <input type='text' value='$name_genre' disabled/>
   </div>
 </div>
 <div class='form-group row'>
   <label class='col-sm-5 col-form-label'>Стиль:</label>
   <div class='col-sm' id='name_style'>
      <input type='text' value='$name_style' disabled/>
   </div>
 </div>
<div class='form-group row'>
   <label class='col-sm-5 col-form-label'>Цена:</label>
 <div class='col-sm' id='Price'>
 <input type='text' value='$Price ' id='pr1' disabled/>
 <input type='text' value='$Discount' id='ds1' disabled hidden/>
  </div>
  </div>
<div class='form-group row'>
   <label class='col-sm-5 col-form-label'>Год выпуска:</label>
 <div class='col-sm ' id='year_of_release'>
 <input type='text' value='$year_of_release' disabled/>
  </div>
  </div>
    <div class='form-group row' id='sas'>
   <label class='col-sm-5 col-form-label'>Цена со скидкой:</label>
 <div class='col-sm' id='Price'>
 <input type='text' value='' id='pr2' disabled/>

  </div>
  </div>
  <div class='form-group row ' style=''> 

  <div class=' mr-3 col-lg-2'><input class='btn  btn-outline-primary ' name='button2' type='submit' value='В корзину'></div>
  <div class=' ml-2 col-lg-5'><button  class = 'btn btn-outline-primary ' onclick='history.go(-1);return false;'>Вернутся обратно</button></div>
</div>
  </div>
  
  </div> 
  <div class='row'>
<div class='sound_list col-auto' >
 <table id='soundListTab'>
<div style='text-align: center;'>Содержание</div>
<tr>
    <th> Название песни </th>
    <th class='timesound'> Время </th>
  
  </tr>
");
$query_sound ="select * from sounds  Where id_list='$id_list'";
 $result_sound = mysqli_query($link,$query_sound) or die("Ошибка".mysqli_error($link));
 $summtime=0;
 while ($row=mysqli_fetch_array($result_sound))
 {
 $name_sound=$row['Name'];
 $duration_sound = $row['duration'];
  $time = strftime('%M:%S',strtotime($duration_sound));
 $summtime += strtotime($duration_sound) - strtotime('00:00:00');
 print("

 <tr>
 <td>$name_sound</td> 
 <td class='timesound'>$time</td> 
 </tr>
  ");
 }
 
 $mathsec =  $summtime / 60;
 $minut = round($mathsec);
 $obrezsec = strstr($mathsec, '.');
 $chars = ['.']; 
 $deldot = str_replace($chars, '',$obrezsec);
 if($deldot>=60){
	 $deldot = $deldot/60;
	 $plusmin = mb_strimwidth($deldot,0,1); 
	 $minut +=$plusmin; 
 }
 elseif(($deldot<10)&&($deldot>0)){
		  $deldot=$deldot * 10;
	 }
 else{
	  $deldot = '00';
 }

 $seconds = mb_strimwidth($deldot,0,2);
print("<tr>
 <td><b>Общее время</b></td> 
 <td class='timesound'><b>$minut:$seconds</b></td> 
 </tr>
 </table></div><div class='col-auto mt-5 imgsl'>
<iframe width='100%' height='315' src='$youtube_link?feature=oembed' 
title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; 
encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe></div></div>
</form>
  </div>");

 }
 mysqli_close($link);?>
<script>

 var object = document.getElementById('pr1').value;
 var dis = object * (document.getElementById('ds1').value / 100);
 document.getElementById('pr2').value +=object - dis;
 if(dis!=0){
	 var saas = document.getElementById('pr2');
	 saas.style.color="red";
 }
 else{
	  var saas = document.getElementById('sas');
	  saas.style.visibility= "hidden";
	  saas.style.display= "none";
 }

 </script>
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
			
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top hedcolup">
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
	  
      <li class=" col-lg-auto nav-item dropdown  menu_font_el">
        <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item mt-1  mb-3 text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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