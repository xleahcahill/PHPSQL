<?php 
namespace read;			
require_once 'IRead.php';

class update implements IRead {
	//attributes
	private $_EventDes;
	private $_EventID;
	private $_Date;
	//constructors
	
	
	//methods
	public  function readDB()
	{
	require_once 'dbstuff.php';
	$conn = mysqli_connect("localhost","root", "", "staff");
	foreach($conn->query('SELECT * FROM events ') as $record)
	{
		echo "<tr>" . 
		"<td>" . $record["EventID"] . "</td>" .
		"<td>" . $record["EventDes"] . "</td>" .
		"<td>" . $record["Date"] . "</td>" .

		"</tr>";
	}
	
	
		}
	public function updateevent(){
			include "dbstuff.php";
	$conn = mysqli_connect("localhost","root", "", "staff");
	
	  if(! $conn ) {
               die('Could not connect: ' . mysqli_error($conn));
            }
            
            $EventID = $_GET['EventID'];
            $EventDes= $_GET['EventDes'];
            
            $sql = mysqli_query($conn,"UPDATE events SET EventDes = '$EventDes'
               WHERE EventID = '$EventID'");
			   
			   if(! $sql )  {
               die('Could not update data: ' . mysqli_error($conn));
            }
            echo "Updated data successfully\n";
         
	
            
            mysqli_close($conn);
    
	}
     	
	}

	 ?>