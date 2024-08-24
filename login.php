<?php
	session_start();


	$error_message='';
	if($_POST){
		include ('database/connection.php');

		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = 'SELECT * FROM users WHERE users.email="'. $username . '" AND users.password ="'. $password . '"';
		$stmt = $conn->prepare($query);
		$stmt->execute();



		if($stmt->rowCount() > 0 ){
			$stmt->setFetchMode (PDO::FETCH_ASSOC);
			$user = $stmt->fetchAll()[0];
			$_SESSION['user'] = $user;
			header('Location : dashboard.php');
		}else $error_message ='Please make sure that the username and password are correct' ;
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | The Good Shot Coffee Shop</title>

	<link rel="stylesheet" type="text/css" href="css/login.css">

</head>
<?php if(!empty($error_message)) {?>
		<div id="errorMessage">
			<strong>ERROR:<strong></p><?=$error_message?></p>
			
		</div>
<?php }?>


	<div class="container">
		<div class ="loginHeader">
			<h1>The Good Shot</h1>
			<p>Coffee Shop</p>
		</div>
		<div class="loginBody">
			<form action="login.php" method = "POST">
				<div class="loginInputsContainer">
					<label for="">Username</label>
					<input placeholder="Username"  name= "username"type="text"/>
				</div>
				<div class="loginInputsContainer">
					<label for="">Password</label>
					<input placeholder="Password" name = "password"type="password"/>
				</div>
				<div class="loginButtonContainer">
					<button>Login</button>
				</div>
				
			</form>
		</div>
		
	</div>

</body>
</html>