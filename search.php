<?php 
namespace read;			
require_once 'IRead.php';

class SearchStaffMember implements IRead
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
		"</tr>";
	}
	}
	
	public function searchstaff(){
	require_once 'dbstuff.php';
	$conn = mysqli_connect("localhost","root", "", "staff");
	
	$username = $_POST['username'];

	
$query="SELECT * FROM staff_members WHERE username='".$username."'";
$result=mysqli_query($conn,$query)or die("No user of that name found");

	while($r=mysqli_fetch_array($result))
{
	
echo"<tr>".
"<td>" . $r["username"] . "</td>".
"<td>" . $r["firstname"] . "</td>".
"<td>" . $r["surname"] . "</td>".
"<td>" . $r["email"] . "</td>".
"<td>" . $r["city"] . "</td>".
"<td>" . $r["datecreated"] . "</td>".
"</tr>";
}

$sql = "INSERT INTO loggedsearches (dataentry) 
		VALUES ('".$username."')";
	
	if (!mysqli_query($conn, $sql))
  {
  die('Error of logging this search: ' . mysqli_error($conn));
  }
echo "Search logged into database.";
 
	}


	}				