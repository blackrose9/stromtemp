<?php
//Start session
session_start();
?>
<?php
	//grab Password file
	class Admin{
		public $email;
		public $password;


		function __construct($e,$pass){
			$this->email = $e;
			$this->password = $pass;
		}
	}


	//connect to database
	$db = new mysqli('localhost','root','','stcs');
	if($db->connect_errno > 0) die ('Unable to connect to database ['.$db->connect_error .']');


	$admin_logon = new Admin($_POST['email'],$_POST['password']);

	$sqlselect = "SELECT email, password FROM admin";

	$result = $db->query($sqlselect);

	if(!$result){
		die('There was an error selecting from database ');
	} else {
		while($row = $result->fetch_assoc()){
			$email 	= $row["email"];
			$passw 	= $row["password"];

			//valiadate input email
			if(!filter_var($admin_logon->email, FILTER_VALIDATE_EMAIL)){
				header('Location: login.php');
			}
			//check if they match
			if($email == $admin_logon->email && $passw == $admin_logon->password){
				$_SESSION["user"] = $email;
				header('Location: index.php');
				exit;
			} else {
				header('Location: login.php');
			}

		}
	}








?>
