 <?php
session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome</title>
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
					
						<div class="txt-welcome">

						
						<div class="personalinfo" style="margin-top:0%; margin-left:27%;">
							<?php
							$mysqli = mysqli_connect('localhost', 'root', '785623', 'accounts');	
		$username=$_GET['user'];
		$sql = "SELECT * FROM users WHERE username='$username';";
		$result = mysqli_query($mysqli, $sql);
		$resultCheck = mysqli_num_rows($result);
		if($resultCheck > 0) {
			while($row = $result->fetch_assoc()) {
				
				echo "<img class='user' style='margin-left:-90%; margin-bottom:-50%; height:240px; width:240px;' src='$row[avatar]'><br>";
				
				echo "<div  style='font-size:30px; color: red; margin-top:-10px; margin-left:20%;'>".$row['username']."<br></div>";
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
		$row['avatar'] = $_SESSION['avatar'];
	?>
	</div>
	</div>
	<br>
	</div>

</header>								
</body>								
</html>