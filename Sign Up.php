<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>РЕГИСТРАЦИЯ</title>
<link rel="stylesheet" href="styles/sign.css">
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/login.css">
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
                <li><a href="Home.php">НAЧАЛО</a></li>
                <li class="active"><a href="Sign Up.php">РЕГИСТРАЦИЯ</a></li>
                <li class="active-log"><a href="Sign In.php">ВХОД</a></li>
            </ul>
		</div>
        <!--SIGN UP FORM!-->
		
		
	<div class="sign-wrapp">
		
		<form class="form" action="register.php" method="POST" enctype="multipart/form-data" autocomplete="off">
		
            <div class="signup-box">	
			<div class="alert alert-error"><?=$_SESSION['message']?></div>
            	<h4>Регистрация</h4>
                <div class="textbox-signup">
                	<input type="text" placeholder="Име" name="firstname" value="" required>                
                </div>
                <div class="textbox-signup">
                    <input type="text" placeholder="Фамилия" name="lastname" value="" required>                
                </div>
                <div class="textbox-signup">
                    <input type="text" placeholder="Телефонен номер" name="gsm" value="" required> 
                </div>
                <div class="textbox-signup">
                    <input type="text" placeholder="Потребителско име" name="username" value="" required>                
                </div>
                <div class="textbox-signup">
                    <input type="password" placeholder="Парола" name="password" value="" required>                
                </div>
				<div class="textbox-signup">
                    <input type="password" placeholder="Повторете паролата" name="confirmpassword" value="" required>               
                </div>
				<div class="textbox-signup">
                    <input type="email" placeholder="E-mail" name="email" value="" required> 
                </div>
               
            </div>
                <!--SIGN UP FORM 2!-->
            <div class="signup-box2">
				
    			 <div class="textbox-signup2">
                	<input type="text" placeholder="Град" name="city" value="" required>                
                </div>
                <div class="textbox-signup2">
                    <input type="text" placeholder="Класно отд." name="klasno" value="" required>              
                </div>
                <div class="textbox-signup2">
                    <input type="text" placeholder="Факултетен номер" name="facultynumber" value="" required>              
                </div>
				<div class="textbox-signup">
                    <input type="text" placeholder="Месторабота" name="workplace" value="" required> 
                </div>
				<div class="textbox-signup">
                    <input type="text" placeholder="Длъжност" name="dlyjnost" value="" required> 
                </div>
				
				<div class="avatar"><label><b>Изберете профилна снимка: </b></label><input type="file" name="avatar" accept="image/*" required /></div>

				<input class="btn-signup" type="submit" name="register" value="Регистрация"><!--Бутон за регистрация!-->
            </div>
		</form>
		<?php $_SESSION['message'] = ''; ?>
	</div>

        </header>
	</body>
</html>