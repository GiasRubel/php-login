<?php
require_once("function.php");
$user = new LoginRegister();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>This is a register page</h1>
</div>
<div class="menu">
	<?php if($user->getsession()) { ?>

	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="index.php">Home</a></li>
	</ul>
		<?php  } else { ?>
	<ul>
		<li><a href="register.php">Register</a></li>
		<li><a href="login.php">Login</a></li>
	</ul>

	<?php } ?>
</div>
<div class="msg">
	<?php
		if(isset($_POST['submit']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
			$name = $_POST['name'];
			$website = $_POST['website'];

			if(empty($username) or empty($password) or empty($email) or empty($name) or empty($website))
			{
				echo "<span style = 'color:red'>Field is required</span>";
			}
			else{

				$password = md5($password);
				$register = $user->registeruser($username,$password,$email,$name,$website);

				if($register)
				{
					echo "<span style = 'color:green'>Registration succesfull <a href='login.php'>Login Here</a></span>";
				}
				else{
					echo "<span style = 'color:red'>Registration failed </span>";
				}
			}
		}
	?>
</div>
<div class="content">
	<form action="" method="post">
		<table>
			<tr>
				<td>usernaame:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Name:</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Website:</td>
				<td><input type="text" name="website"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit"></td>
				<td><input type="reset" name="reset" value="Reset"></td>
			</tr>
		</table>
	</form>	
</div>
<div class="footer">
	<p>This is a footer</p>
</div>

</body>
</html>