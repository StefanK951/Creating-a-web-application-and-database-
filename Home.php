<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOME</title>
<link rel="stylesheet" href="styles/style.css">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="JavaScript/main.js"></script>
<script type="text/javascript">
	$(window).on('scroll', function('10%') {	
		if($(window).scrollTop()) {
			$('.main-nav').addClass('.black');
		}
		else {
			$('.main-nav').removeClass('.black');
		}
	})
</script>
</head>
<body style="font-family:Verdana;">
<header>
		
    <div class="row">  
		<div class="logo">
			<img  src="logo.png" >
			<div  class="logo-text"></div>
        		<a href="http://aadcf.nvu.bg/"><h1>Факултет "Артилерия, ПВО и КИС"</h1></a>
		</div> 		
        	<div  class="main-nav"  >
                <li class="active"><a href="Home.php">НАЧАЛО</a></li>
                <li><a href="#about">ЗА САЙТА</a></li>
                <li><a href="Sign Up.php">РЕГИСТРАЦИЯ</a></li>
                <li class="active-log"><a href="Sign In.php">ВХОД</a></li>
            </div>
	</div>
</header>
		<div class="home-text" style="font-family:Verdana;">
		  <p class="question">Имаш ли регистрация?</p>
            	<div class="button">
                	<a href="Sign In.php" class="btn btn-da"> ДА</a>
                    <a href="Sign Up.php" class="btn btn-ne"> НЕ</a>
             </div>                
        </div> 
	
    <section id="about" class="text-intro">
        	<p>   
			 Това е сайт който осигурява възможност 
            на вече завършилите студенти в специалността КСТ да се свържат със 
            бившите си колеги и преподаватели. 
            <p>Катедра „Компютърни системи и технологии” е учебно-научно звено към Факултет „Артилерия, ПВО и КИС” на НВУ „Васил Левски”.
			Катедрата е създадена през далечната 1972 година и вече над 40 години подготвя висококвалифицирани компютърни инженери.
			За рожден ден на катедрата се приема 12.10.1972 година, датата на създаването на катедра "Автоматика и кибернетика", впоследствие 
            преобразувана в катедра "Автоматизация управлението на войските”. Само съответната катедра на ТУ – София е създадена две години по-рано. 
            Преобразувана е в катедра „Компютърни системи и технологии " през 2002 година, когато с Решение на Народното събрание 
            (Обн., ДВ, бр. 62 от 25 юни 2002г.) Висшето военно общовойсково училище "Васил Левски", Висшето военно училище за артилерия и 
            противовъздушна отбрана "Панайот Волов" и Висшето военновъздушно училище "Георги Бенковски" се 
            обединяват в Национален военен университет "Васил Левски".
            Катедра „Компютърни системи и технологии” е профилираща за всички обучаеми с гражданска специалност 
            „Компютърни системи и технологии" и професионална квалификация „компютърен инженер”. 
            Провежда обучение по компютърни дисциплини на всички военните и цивилни специалности на Факултета.</p>
        </section>
</body>
</html>
