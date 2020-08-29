<?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Лична информация</title>
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
					<span class="user" ><img style="margin-bottom:-10%; height:240px; width:240px;" src= '<?= $_SESSION['avatar']; $_SESSION['username'] ?>' style="height:30%; width:20%; margin-left: -20%;
						margin-top: 3%;" </span><br>
						<div class="txt-welcome">

						
						<div class="personalinfo" style="margin-top:-180%; margin-left:27%;">
							<?php
							$mysqli = mysqli_connect('localhost', 'root', '785623', 'accounts');	
		$username=$_SESSION['username'];
		$sql = "SELECT * FROM users WHERE username= '$username';";
		$result = mysqli_query($mysqli, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0) {
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "<u>Потребителско име</u>-  " ;
				echo $row['username']."<br>";
				echo "<u>Име</u>-  " ;
				echo $row['firstname']."<br>";
				echo "<u>Фамилия</u>-  " ;
				echo $row['lastname']."<br>";
				echo "<u>Имейл</u>-  " ;
				echo $row['email']."<br>";
				echo "<u>Телефонен номер</u>-  " ;
				echo $row['gsm']."<br>";
				echo "<u>Град</u>-  " ;
				echo $row['city']."<br>";
				echo "<u>Месторабота</u>-  " ;
				echo $row['workplace']."<br>";
				echo "<u>Длъжност</u>-  " ;
				echo $row['dlyjnost']."<br>";
				
			}
		}
	?>
	</div>
	</div>
	<br>
	<form class="changeinfo" action="changeinfo.php" method="POST" enctype="multipart/form-data" autocomplete="off" >
	<p><u>Промяна на данни</u></p>
	<div class="textbox">
      <input style="color:white" type="text" placeholder="Име" name="firstname" value="" >               
    </div>
	<div class="textbox">
      <input style="color:white" type="text" placeholder="Фамилия" name="lastname" value="">               
    </div>
	<div class="textbox">
      <input style="color:white" type="text" placeholder="Телефонен номер" name="gsm" value="" >               
    </div>
	<div class="textbox">
      <input style="color:white" type="text" placeholder="Град" name="city" value="" >        
    </div>
	<div class="textbox">
      <input style="color:white" type="text" placeholder="Месторабота" name="workplace" value="" >        
    </div>
	<div class="textbox">
      <input style="color:white" type="text" placeholder="Длъжност" name="dlyjnost" value="" >        
    </div>
	
	
	<input class="btn-signup" type="submit" name="submit" value="Промяна">
	
	</form>
						 </div>

</header>								
</body>								
</html>