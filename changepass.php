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
	$password1 = $_POST['passnew'];
	$password2 = $_POST['passconfirm'];
	
	if ($password1 == $password2 ) {
		$password2 = mysqli_real_escape_string($mysqli, $_REQUEST['passconfirm']);
		$password= password_hash($password2, PASSWORD_BCRYPT);//криптиране на паролата
	$update = "UPDATE users SET password='$password' WHERE username='$username'";
	
	$run = mysqli_query($mysqli,$update);
	if($run){
		echo "<script>alert('Успешно променихте вашата парола.')</script>";
		echo "<script>window.open('Personalinfo.php','_self')</script>";
	}
	}
}



?>
