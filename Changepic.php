<?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Смяна на профилна снимка</title>
<link rel="stylesheet" href="styles/welcome.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/personal.css">


<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
	$(window).on('scroll', function())
	{
		if($(window).scrollTop()) {
			$('main-nav').addClass('black');
		}
		else {
			$('main-nav').removeClass('black');
		}
	})
</script>
</head>
	<body>
    	<header>
    	<div class="row">
		<div class="logo">
			<img src="logo.png">
			<div class="logo-text"></div>
        		<a href="http://aadcf.nvu.bg/"><h1>Факултет "Артилерия, ПВО и КИС"</h1></a>
		</div>
        	<ul class="main-nav">
				<div class="dropdown">
					  <button  class="dropbtn">ПРОФИЛ</button>
					  <div class="dropdown-content">
						<a href="personalinfo.php">Лични данни</a>
						<a href="changepsw.php">Смяна на парола</a>
						<a href="changeavatar.php">Смяна на профилна снимка</a>
					  </div>
					</div>
                <li><a class="active" href="welcome.php">НАЧАЛО</a></li>
				<li><a style="border:2px solid red; color:white" href="logout.php">ИЗХОД</a></li>
            </ul>
		</div>
			
	<br>
	<div class="welcome">
	<form class="changeinfo" style="margin-top: -10%; margin-left: 10%;" action="changeavatar.php" method="POST" enctype="multipart/form-data" autocomplete="off" >
	<p><u>Промяна на снимка</u></p>
	<div class="avatar"><label><b>Изберете профилна снимка: </b></label>
	<input type="file" name="avatarnew"/></div>
	
	<input class="btn-signup" type="submit" name="submit" value="Промяна">
	
	</form>
	</div>

</header>								
</body>								
</html>