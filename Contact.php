<html>
<head>
<meta charset="utf-8">
<title>КОНТАКТИ</title>
<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="styles/sign.css">
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
                <li><a href="Home.php">НАЧАЛО</a></li>
                <li class="active"><a href="Contact.php">КОНТАКТИ</a></li>
                <li><a href="Sign Up.php">РЕГИСТРАЦИЯ</a></li>
                <li class="active-log"><a href="Sign In.php">ВХОД</a></li>
            </ul>
		</div>
			<div id="contact" class="modal1">
  
  <form class="modal-content1 animate" style="height:93%;" action="https://m.facebook.com/ChechkoKostov">
    <div class="imgcontainer1">
      <img src="Pic/avatarSK.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container1" style=" font-size: 25px; text-align: center;">
      <label for="uname"><u><b>Стефан</b></u></label><br>

      <label for="uname"><u><b>Костов</b></u></label><br>
	
	<label  for="uname"><b>GSM:+359882266055</b></label><br>
        
    </div>

	<button class="btn_facebook" type="submit" style="font-size:20px;">FaceBook</button>
	<div class="container" style="background-color:#f1f1f1">
    </div>
  </form>
</div>
		
	</body>
		</header>
</html>