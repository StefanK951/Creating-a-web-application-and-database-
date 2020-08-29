<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ВХОД</title>
<link rel="stylesheet" href="styles/sign.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
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
                <li><a href="Home.php">НАЧАЛО</a></li>
                <li><a href="Sign Up.php">РЕГИСТРАЦИЯ</a></li>
                <li class="active-log"><a href="Sign In.php">ВХОД</a></li>
            </ul>
		</div>
		<div class="login-wrapp">
		<form class="form" action="login.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="login-box">
			
            	<h3>Вход</h3>
                <div class="textbox">
                	<input style="color:black" type="text" placeholder="Потребителско име" name="username" value="" required> 
                    <i class="fa fa-user" aria-hidden="true"></i>               
                    </div>
                    
                <div class="textbox">                	
                    <input style="color:black" type="password" placeholder="Парола" name="password" value="" required>               
                    <i class="fa fa-lock" aria-hidden="true"></i>
                     </div><br>
					 
					 <!--<input type='checkbox' name='log_check' />
					 <p style="color: black; margin-inline-start: 10%; margin-top: -8%;">
					 Keep me Logged in <p><br>!-->
                   	
                 <input  class="btn-login" type="submit" name="submit" value="Вход"> 
                   
            </div>
		</form>
		<?php $_SESSION['message'] = ''; ?>
		</div>
        </header>
	</body>
</html>