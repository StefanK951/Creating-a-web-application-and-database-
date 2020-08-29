<?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Смяна на парола</title>
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
					  <button class="dropbtn">ПРОФИЛ</button>
					  <div class="dropdown-content">
						<a href="personalinf.php">Лични данни</a>
						<a href="changepsw.php">Смяна на парола</a>
						<a href="changepic.php">Смяна на профилна снимка</a>
					  </div>
					</div>
                <li><a class="active" href="welcome.php">НАЧАЛО</a></li>
				<li><a style="border:2px solid red; color:white" href="logout.php">ИЗХОД</a></li>
            </ul>
		</div>
		<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
			<div class="welcome-content">
				<div class="welcome">
					<span class="user"><img  src= '<?= $_SESSION['avatar']; $_SESSION['username'] ?>' style="margin-bottom:-10%; height:240px; width:240px;" </span><br>
						
	<br>
	<br>
	<form class="changeinfo" action="changepass.php" method="POST" enctype="multipart/form-data" autocomplete="off" >
	<p><u>Промяна на парола</u></p>
	<div class="textbox">
      <input style="color:white" type="password" placeholder="Нова парола" name="passnew" value="" required>               
    </div>
	<div class="textbox">
      <input style="color:white" type="password" placeholder="Потвърдете паролата" name="passconfirm" value="" required>        
    </div>	
	
	<input class="btn-signup" type="submit" name="submit" value="Промяна">
	
	</form>
</div>

</header>								
</body>								
</html>