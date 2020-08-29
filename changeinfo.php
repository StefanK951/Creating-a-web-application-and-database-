<?php
session_start();
$_SESSION['message'] = '';
//връзка с база данни
$mysqli = mysqli_connect('localhost', 'root', '785623', 'accounts');
		//Проверка за връзка с база данни
		if($mysqli === false){
			   $_SESSION['message'] = "Няма връзка с база данни!!!";
			   header("location: Sign In.php");
			   exit();
			}

if(isset($_POST['submit'])){
	
	$username = $_SESSION['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gsm = $_POST['gsm'];
	$city = $_POST['city'];
	$workplace = $_POST['workplace'];
	$dlyjnost = $_POST['dlyjnost'];
	
	$update = "UPDATE users SET username='$username', firstname='$firstname', lastname='$lastname',gsm='$gsm' ,city='$city',
	workplace='$workplace', dlyjnost='$dlyjnost' WHERE username='$username'";
	
	$run = mysqli_query($mysqli,$update);
	if($run){
		echo "<script>alert('Успешно променихте вашата информация.')</script>";
		echo "<script>window.open('Personalinfo.php','_self')</script>";
	}
	
}



?>
