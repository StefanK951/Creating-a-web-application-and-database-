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
					<span class="user"><img style="margin-bottom:-10%; height:240px; width:240px;"  src= '<?= $_SESSION['avatar'] ?>'</span><br>
						<div class="txt-welcome">
						 <span class="user" style="font-size:30px; color:#ff7e00;  margin-top:-10px; margin-left:20%;"><?= $_SESSION['username'];$_SESSION['klasno'] ?></span>
						</div>
							<?php
							$mysqli = mysqli_connect('localhost', 'root', '785623', 'accounts');							
							$klasno = $_SESSION['klasno'];
							$sql = "SELECT username,avatar,klasno FROM users WHERE klasno='$klasno'";
							$result = $mysqli->query($sql) or die($mysqli->error); //$result е обект на mysqli_result
								?>
							<div id="registered">
								<span>Всички регистрирани потребители от вашето класно.</span>
								<?php
								//Създаваме while цикъл където ще се обновяват потребителите
								
								while($row = $result->fetch_assoc()){
									echo "<a href='userinfo.php?user=$row[username]'><div class='userlist'><br><span> $row[username]</span><br><br><br>";
										
									echo "<img src='$row[avatar]'></div></a>";
									
									
								}
									
								?>
							</div>
						
						
				</div>
			</div>
	<?php $_SESSION['message'] = '';?>
</body>
</html>

