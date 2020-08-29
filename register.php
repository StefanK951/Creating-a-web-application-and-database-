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

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	

	$confirmpassword= mysqli_real_escape_string($mysqli,$_REQUEST['confirmpassword']);
	$password = mysqli_real_escape_string($mysqli,$_REQUEST['password']);



	if ($confirmpassword == $password ){//Проверка за съвпадение на паролите
	////Инициализиране на променливи и присвояване на име на поле
	$firstname = mysqli_real_escape_string($mysqli,$_REQUEST['firstname']);
			if($firstname == '' || empty($firstname)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$lastname = mysqli_real_escape_string($mysqli,$_REQUEST['lastname']);
			if($lastname == '' || empty($lastname)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$gsm = mysqli_real_escape_string($mysqli,$_REQUEST['gsm']);
			if($gsm == '' || empty($gsm)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$username = mysqli_real_escape_string($mysqli,$_REQUEST['username']);
		//Проверка за съществуващо потребитеско име
			$check_duplicate_username = "SELECT username from users
										WHERE username = '$username'";
			$result = mysqli_query($mysqli, $check_duplicate_username);
			$count = mysqli_num_rows($result);

			if($count > 0){
				$_SESSION['message'] = "Този потребител е вече регистриран!";
				header("location: Sign Up.php");
				return false;

			}

				if($username == '' || empty($username)){
					echo "<h1>Полето неможе да бъде празно!</h1>";
					return false;
				}
	$passwordEN = mysqli_real_escape_string($mysqli, $_REQUEST['password']);
			$password= password_hash($passwordEN, PASSWORD_BCRYPT);//криптиране на паролата
			if($password == '' || empty($password)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$email = mysqli_real_escape_string($mysqli,$_REQUEST['email']);
		//Проверка за съществуващ имейл

			$check_duplicate_email = "SELECT email from users
										WHERE email = '$email'";
			$result = mysqli_query($mysqli, $check_duplicate_email);
			$count = mysqli_num_rows($result);

			if($count > 0){
				$_SESSION['message'] = "Този имей адрес е вече регистриран!";
				header("location: Sign Up.php");
				return false;
			}

				if($email == '' || empty($email)){
					echo "<h1>Полето неможе да бъде празно!</h1>";
					return false;
				}
				else if (!preg_match("/^[a-zA-Z0-9 ]*$/",$email)) {//защита от забранени символи
					$_SESSION['message'] = "Моля не използвайте забранени символи!";
					header("location: Sign Up.php");
					}

	$city = mysqli_real_escape_string($mysqli,$_REQUEST['city']);
			if($city == '' || empty($city)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$klasno = mysqli_real_escape_string($mysqli,$_REQUEST['klasno']);
			if($klasno == '' || empty($klasno)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$facultynumber = mysqli_real_escape_string($mysqli,$_REQUEST['facultynumber']);
			if($facultynumber == '' || empty($facultynumber)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$workplace = mysqli_real_escape_string($mysqli,$_REQUEST['workplace']);
			if($workplace == '' || empty($workplace)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}
	$dlyjnost = mysqli_real_escape_string($mysqli,$_REQUEST['dlyjnost']);
			if($dlyjnost == '' || empty($dlyjnost)){
				echo "<h1>Полето неможе да бъде празно!</h1>";
				return false;
			}

		$avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
		if (preg_match("!image!", $_FILES['avatar']['type'])) {

			//копираме изображението в папка
			if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
			} else{$_SESSION['message'] = "File upload failed!"; }
			}else{$_SESSION['message'] = "Моля използвайте файлове от тип GIF,JPG или PNG!";}
				$_SESSION['username'] = $username;
				$_SESSION['avatar'] = $avatar_path;
				$_SESSION['klasno'] = $klasno;

					$sql = "INSERT INTO users (username,email,password,firstname,lastname,gsm,city,fakultynumber,klasno,avatar,workplace,dlyjnost)
					 VALUES ('$username','$email','$password','$firstname','$lastname','$gsm','$city','$facultynumber','$klasno','$avatar_path','$workplace','$dlyjnost')";

					if ($mysqli->query($sql) === true){
						$_SESSION['message']= "Регистрацията е успешна! $username";
						header("Location: Welcome.php");
					}else {$_SESSION['message'] = "Потребителят не може да се регистрира!";}

	}
	else{
		$_SESSION['message'] = "Паролите не съвпадат!";
		header("location: Sign Up.php");
		}
}else{
	echo "Няма запис!!";
}

?>
