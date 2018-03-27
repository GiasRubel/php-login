<?php
session_start();
require_once("function.php");
$user  = new LoginRegister();
$uid   = $_SESSION['uid'];
$username = $_SESSION['uname'];
if(!$user->getsession())
{
	header('Location:login.php');
	exit();
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>user page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
	<h1>This is a index page</h1>
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

<div class="table_c">

	<h1>username: <?php echo $username; ?> </h1> 
	<table class="tbl_1">
		<tr>
			<th>serial</th>
			<th>Name</th>
			<th>Details</th>
		</tr>

		<?php
		$id = 0;
		$alluser = $user->alluser();
		foreach ($alluser as $users) {
			$id++;
		?> 

		<tr>
			<td> <?php echo $id; ?> </td>
			<td> <?php echo $users['name']?> </td>
			<td> <a href="userprofile.php?id=<?php echo $users['id']; ?> ">user detail</a> </td>
		</tr>
		<?php } ?>
	</table>
</div>

<div class="footer">
	<p>This is a footer</p>
	<?php echo date("I F d, Y");?>
</div>

</body>
</html>