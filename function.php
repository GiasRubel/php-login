<?php
require_once("config.php");

class LoginRegister{

	public function __construct()
	{
		$database = new DatabaseConnection();
	}

	public function registeruser($username,$password,$email,$name,$website)
	{
		global $pdo;

		$query = "select id from users where username = ? and email = ?";
		$result = $pdo->prepare($query);
		$result->execute(array($username,$email));
		$rows = $result->fetchAll();
		$num = count($rows);

		if($num == 0)
		{
			$query = "insert into users (username,password,email,name,website) values(?,?,?,?,?)";
			$result = $pdo->prepare($query);
			$result->execute(array($username,$password,$email,$name,$website));
			return true;
		}
		else{
			print "<span style = 'color:#ef3d57'>Error.........User already exist</span>";
		}
	}

	public function loginuser($email,$password)
	{
		global $pdo;
		$query = " select id,username from users where email = ? and password =? ";
		$result = $pdo->prepare($query);
		$result->execute(array($email,$password));
		$rows = $result->fetch();
		$num_rows = $result->rowCount();

		if($num_rows == 1)
		{
			session_start();
			$_SESSION['login'] = true;
			$_SESSION['uid'] = $rows['id'];
			$_SESSION['uname'] = $rows['username'];
			$_SESSION['log_msg'] = 'login successfull';

			return true;
		}
		else{
			return false;
		}
	}

	public function alluser()
	{
		global $pdo;
		$query = "select * from users order by id DESC";
		$result = $pdo->prepare($query);
		$result->execute();
		return $result->fetchAll();

	}

	public function getsession()
	{
		return @$_SESSION['login'];
	}

	public function logoutuser()
	{
		$_SESSION['login'] = true;
		unset($_SESSION['uid']) ;
		unset($_SESSION['uname']) ;
		unset($_SESSION['log_msg']);

		session_destroy();
	}

	
}
?>