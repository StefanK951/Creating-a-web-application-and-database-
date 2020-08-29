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
	$avatar_path1 = $mysqli->real_escape_string('images/'.$_FILES['avatarnew']['name']);
		if (preg_match("!image!", $_FILES['avatarnew']['type'])) {

			//копираме изображението в папка
			if (copy($_FILES['avatarnew']['tmp_name'], $avatar_path1)){
			} else{$_SESSION['message'] = "File upload failed!"; }
			}else{$_SESSION['message'] = "Моля използвайте файлове от тип GIF,JPG или PNG!";}
	
	$update = "UPDATE users SET avatar='$avatar_path1' WHERE username='$username'";
	$_SESSION['username'] = $username;
	$_SESSION['avatar'] = $avatar_path1;
	
	$run = mysqli_query($mysqli,$update);
	if($run){
		echo "<script>alert('Успешно променихте вашата профилна снимка.')</script>";
		echo "<script>window.open('Personalinfo.php','_self')</script>";
	}
	
}



?>
