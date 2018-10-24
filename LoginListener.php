<?php
namespace Main\ObserverPattern;

require_once 'ObjectProperties.php';
require_once 'IObserver.php';

use \Main\ObjectProperties;

class LoginListener extends ObjectProperties implements IObserver
{
	// Attributes
	private $_dataentryid;
	
	// Methods for properties
	// Getters and Setters	
	// Methods
	
	public function logg()
	{
			require_once 'dbstuff.php';
	$conn = DatabaseConnect();//mysqli_connect("localhost","root", "", "staff");	
	$username = $_POST['username'];
	$password=$_POST["password"];
		
		$sql = "INSERT INTO login_system_logging (UserLogin, UserPW)
		VALUES ('".$username."','".$password."')";
		
		if (!mysqli_query($conn, $sql))
  {
	die('Error of logging: ' . mysqli_error($conn));
  
	echo " Logged into database.";
 
	}
	}
}
?>