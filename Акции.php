<!DOCTYPE html>
<html lang="ru">
<?php session_start(); ?>
<head>
<title>Акции</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
<link type="image/svg" href="img/pngwing.com_2.png" rel="shortcut icon">
 
</head>
<body>
<div class="fixed-top">
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
              <input class="place_for_search form-control" type="search" id="text-to-find" value="" placeholder="Поиск" autofocus>  
<div class="input-group-append">			  
              <input class="button_for_search btn btn-dark" type="submit" onclick="javascript: FindOnPage('text-to-find',true); return false;" value="Поиск" title="Начать поиск">
             </div></div></form>
	</li></ul>
</nav>
<nav class="navbar navbar-expand-lg navbar-light hedcoldown">
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <ul class="navbar-nav mx-auto  top_menu" >
    <li class=" mx-auto  col-lg-auto nav-item dropdown ulseclist">
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

    <!-- Initialize Swiper -->
     <script src="js\script.js"></script>
	 <br><br> <br> <br> <br> <br> <br> <br>
	
<div>

 <!-- Товары сайта -->
 
 <div class='strike'>
   <span>Акции </span>
 <div  class='row  justify-content-center m-3 '>
	  <div class='col-xl align-self-center'><link rel='stylesheet' href='css/style_2.css' type='text/css'/>
<div class="row m-1 justify-content-center">
<a class='genreback '>
<ul class="list-inline " >
  <li class=" list-inline-item nav-item dropdown  menu_font_el">
<button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><input class='btn buttonUnderline' type='button' data-filter='1' value='Rock'/></button>
 <div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" >
 <input class="btn buttonUnderline"  type='button' data-filtersas="1" value='Heavy Metal' />
<input class="btn buttonUnderline"  type='button' data-filtersas="2" value='Russian rock' />
<input class="btn buttonUnderline"  type='button' data-filtersas="4" value='Pop Rock' />
<input class="btn buttonUnderline"  type='button' data-filtersas="5" value='Hard Rock' />
<input class="btn buttonUnderline"  type='button' data-filtersas="6" value='Alternative Rock' />
<input class="btn buttonUnderline"  type='button' data-filtersas="7" value='Glam' />
<input class="btn buttonUnderline"  type='button' data-filtersas="9" value='Classic Rock' />
 </div>
</li>
  <li class=" list-inline-item nav-item dropdown  menu_font_el">
  <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<input class='btn buttonUnderline' type='button' data-filter='2' value='Punk Rock'/></button>
 <div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" >
 <input class="btn buttonUnderline"  type='button' data-filtersas="11" value='Punk' />
<input class="btn buttonUnderline"  type='button' data-filtersas="12" value='Pop Punk' />
 </div>
</li>
  <li class=" list-inline-item nav-item dropdown  menu_font_el">
  <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<input class='btn buttonUnderline' type='button' data-filter='3' value='Metal'/></button>
<div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" >
<input class="btn buttonUnderline"  type='button' data-filtersas="8" value='Power Metal' />
<input class="btn buttonUnderline"  type='button' data-filtersas="10" value='Speed Metal' />
</div>
</li>
  <li class=" list-inline-item nav-item dropdown  menu_font_el">
  <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<input class='btn buttonUnderline' type='button' data-filter='5' value='Electronic'/></button>
<div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" >
<input class="btn buttonUnderline"  type='button' data-filtersas="3" value='Drum n Bass' />
<input class="btn buttonUnderline"  type='button' data-filtersas="13" value='Synth-pop' />
<input class="btn buttonUnderline"  type='button' data-filtersas="14" value='Synthwave' />
<input class="btn buttonUnderline"  type='button' data-filtersas="15" value='Soundtrack' />
</div>
</li>
  <li class=" list-inline-item nav-item dropdown  menu_font_el">
  <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<input class='btn buttonUnderline' type='button' data-filter='6' value='Jazz'/></button>
<div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" ></div>
</li>
  <li class=" list-inline-item nav-item dropdown  menu_font_el">
  <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<input class='btn buttonUnderline' type='button' data-filter='7' value='Prog Rock'/></button>
<div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" ></div>
</li>
  <li class=" list-inline-item nav-item dropdown  menu_font_el">
  <button class=" buttonUnderline nav-link dropdown-toggle px-2 list_drop_item  text-dark font-weight-bold" ondblclick="window.location.href = 'Каталог.php';" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<input class='btn buttonUnderline' type='button' data-filter='8' value='Blues'/></button>
<div class="dropdown-menu form-group" aria-labelledby="navbarDropdown" ></div>
</li>
</ul>
</a>
</div> 

<div class="row  m-1 justify-content-center ">
<a class='allcatback p-1'>
<input class='btn buttonUnderline'  type='button' data-filterns='all' data-filter='all' value='Все элементы' />
 </a>
</div>
	  </div></div>
</div><br>
		<div class='row gx-5' >
		<?php 
	
           $host='localhost';
           $database='muztovar';
           $user='root';
           $password='';
           $query_genre='';
         
           $link=mysqli_connect($host,$user,$password,$database)or die("ошибка".mysqli_error($link));

           $query="select * from product Where discount > 0";
           $result = mysqli_query($link,$query) or die("Ошибка".mysqli_error($link));
           
           
           while ($row=mysqli_fetch_array($result))
           {
           $id_product = $row["id_product"];
           $Name=$row["Name"];
           $Adress_img=$row['Adress_img'];
           $id_group=$row['id_group'];
           $Count_carriers=$row['Count_carriers'];
		   $id_carrier=$row['id_carrier'];
           $Price=$row['Price'];
           $id_genres = $row['id_genres'];
		   $Discount = $row['discount'];
		    $id_style = $row['id_style'];
           $query_group = "Select Name From groups Where id_group='$id_group'";
           $result_group = mysqli_query($link,$query_group) or die("Ошибка".mysqli_error($link));
           
           if($result_group)
           {
           	
               while($row = mysqli_fetch_assoc($result_group))
               {
                  $NameGroup = $row['Name']; 
                  
               }
           }
if(isset($_SESSION['login'])){
$login=$_SESSION["login"];
           	
					 		print("
            <form class='col-lg-3' method='post' action='Order.php' data-cat='$id_genres' data-car='$id_carrier'  data-style='$id_style'>	
                        <div><input name='id_product' value='$id_product' type='hidden'/>
                             <input name='$id_genres' value='$id_genres' type='hidden'/>							
                        <div class='product'><button name='button1' class='btn forimg'><img src='$Adress_img'  alt='Product'></button>
                        <br><br><p><span>$Name</span></p>
                        <p><span>$NameGroup </span><p>
                        <p>Число носителей- <span>$Count_carriers</span>
                                <span>$Price ₽</span></p>
           			 <p>      <button class='btn   ' name='button2' type='submit'>
           			 <figure><img src='img\korzina.png' alt='Korzina'></figure></button></p>
                        </div>
                    </div>
                    </form>" );
                }
				else{
					 		print("
            <form class='col-lg-3' method='post' action='Order.php' data-cat='$id_genres' data-car='$id_carrier'  data-style='$id_style'>	
                        <div><input name='id_product' value='$id_product' type='hidden'/>
                             <input name='$id_genres' value='$id_genres' type='hidden'/>							
                        <div class='product'><button name='button1' class='btn forimg'><img src='$Adress_img'  alt='Product'></button>
                        <br><br><p><span>$Name</span></p>
                        <p><span>$NameGroup </span><p>
                        <p>Число носителей- <span>$Count_carriers</span>
                                <span>$Price ₽</span></p>
           			 <p>      <button class='btn   ' name='button2' type='submit'>
           			 <figure><img src='img\korzina.png' alt='Korzina'></figure></button></p>
                        </div>
                    </div>
                    </form>" );
				}
				}
            mysqli_close($link);
           
         ?>
</div>

</div>
<script type="text/javascript">
$(function() {

    let filter = $("[data-filter]");

    filter.on("click", function(event) {
        event.preventDefault();

        let cat = $(this).data('filter');
  
        if(cat == 'all') {
            $("[data-cat]").removeClass("hide");
        } else {
            $("[data-cat]").each(function() {
                let workCat = $(this).data('cat');

                if(workCat != cat) {
                    $(this).addClass('hide');
                } else {
                    $(this).removeClass('hide');
                }
            });
        }
    });
});

$(function() {

    let filterns = $("[data-filterns]");

    filterns.on("click", function(event) {
        event.preventDefault();

        let car = $(this).data('filterns');
      
        if(car == 'all') {
            $("[data-car]").removeClass("hide");
        } else {
            $("[data-car]").each(function() {
                let workCar = $(this).data('car');

                if(workCar != car) {
                    $(this).addClass('hide');
                } else {
                    $(this).removeClass('hide');
                }
            });
        }
    });
});

$(function() {

    let filtersas = $("[data-filtersas]");

    filtersas.on("click", function(event) {
        event.preventDefault();

        let style = $(this).data('filtersas');
      
        if(style == 'all') {
            $("[data-style]").removeClass("hide");
        } else {
            $("[data-style]").each(function() {
                let workstyle = $(this).data('style');

                if(workstyle != style) {
                    $(this).addClass('hide');
                } else {
                    $(this).removeClass('hide');
                }
            });
        }
    });
});
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