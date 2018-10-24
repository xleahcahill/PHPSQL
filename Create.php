<?php 

namespace Read;			
require_once 'IRead.php';

class Create implements IRead
{

	private $_username;		
	private $_datecreated;
	private $_password;
	private $_email;
	private $firstname;
	private $surname;
	private $street;
	private $city;
	private $postcode;
	private $mobilenumber;

	// constructors 
	
	function staff(){	
	$connection = mysqli_connect("localhost", "root", "");
	$result = mysqli_query("mysql", "SELECT * FROM staff_members");
	
	while ($staff = mysqli_fetch_array ($results)){
		$this->set_username($this_username);
		$this->set_datecreated($this_datecreated);
		$this->set_password($this_password);
		$this->set_email($this_email);
		$this->set_firstname($this_firstname);
		$this->set_surname($this_surname);
		$this->set_street($this_street);
		$this->set_city($this_city);
		$this->set_postcode($this_postcode);
		$this->set_mobilenumber($this_postcode);
	}
	
	mysqli_free_result ($result);
	} 
	
	
	
	public function createstaff(){
		include "dbstuff.php";
	$conn = mysqli_connect("localhost","root", "", "staff");
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($conn,"staff");
 
$sql="INSERT INTO staff_members (username, datecreated, password, email, firstname, surname, street,city, postcode)
VALUES
('$_POST[username]',
'$_POST[datecreated]',
'$_POST[password]',
'$_POST[email]',
'$_POST[firstname]',
'$_POST[surname]',
'$_POST[street]',
'$_POST[city]',
'$_POST[postcode]')";
 
if (!mysqli_query($conn, $sql))
  {
  die('Error: ' . mysqli_error($conn));
  }
echo "record added";
 
	}

	
	
	
	public  function readDB()
	{
	require_once 'dbstuff.php';
	$conn = mysqli_connect("localhost","root", "", "staff");
	foreach($conn->query('SELECT * FROM staff_members ') as $record)
	{
		echo "<tr>" . 
		"<td>" . $record["username"] . "</td>" .
		"<td>" . $record["datecreated"] . "</td>" .
		"<td>" . $record["email"] . "</td>" .
		"<td>" . $record["firstname"] . "</td>" .
		"<td>" . $record["surname"] . "</td>" .
		"<td>" . $record["street"] . "</td>" .
		"<td>" . $record["city"] . "</td>" .
		"<td>" . $record["postcode"] . "</td>" .
		"</tr>";
	}
	
	
	}
}
