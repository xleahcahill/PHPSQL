<?php
namespace read; 
require "IRead.php";

class Events implements IRead
{	// Attributes
	private $_EventID;		
	private $_EventDes;
	private $_Date;
	
	// Constructor
	// Methods
	public function ReadDB(){
require_once 'dbstuff.php';
	$conn = mysqli_connect("localhost","root", "", "staff");
	foreach($conn->query('SELECT * FROM events ORDER BY Date ASC ') as $record)
	{
		echo "<tr>" . 
		"<td>" . $record["EventID"] . "</td>" .
		"<td>" . $record["EventDes"] . "</td>" .
		"<td>" . $record["Date"] . "</td>" .

		"</tr>";
	}
	}
}

?>	
	
