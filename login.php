<?php
require_once("function.php");
$user = new LoginRegister();
if($user->getsession())
{
	header('Location:index.php');
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>This is a LOGIN page</h1>
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
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(empty($email) or empty($password) )
		{
			echo "<span style = 'color:red'>Fill the Field</span>";
		}
		else{
			$password = md5($password);
			$loginuser = $user->loginuser($email,$password);
			if($loginuser)
			{
				header('Location:index.php');
				// echo 'login successfull';
			}
			else{
				echo "<span style ='color:red'>email or password does't match</span>";
			}
		}

	}
?>
</div>
<div class="content">
	<form action="" method="post">
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" placeholder="Enter email "></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password" placeholder="Enter password"></td>
			</tr>

			<tr>
				<td><input type="submit" name="login" value="login"></td>
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