<?php 
namespace read;			
require_once 'IRead.php';

class DeleteStaffMember implements IRead
{
	// attributes 
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

	//constructors
	
	//methods 
		public  function readDB()
	{
	require_once 'dbstuff.php';
	
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
		
	public function deleteUser(){

$conn=mysqli_connect('localhost', 'root', '', 'staff');

if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = $_GET['username']; 

mysqli_query($conn,"DELETE FROM staff_members WHERE username='".$username."'");
mysqli_close($conn);

}
} 	
	
	
	