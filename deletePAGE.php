<!DOCTYPE html>
<html>
<head>
    <title>Delete Page</title>
    <link rel="stylesheet" href="stylesheetpagess.css"/>
    <meta charset="utf-8" />
</head>
<body>
<section id="Intro">
<img src="logo.png" align="left"/><h1>Remove a member of staff </h1></section>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="CreatePAGE.php">Add new staff member</a></li>
  <li><a href="deletePAGE.php">Delete existing staff from table</a></li>
  <li><a href="updatePAGE.php">Update Events Table</a></li>
  <li><a href="searchPAGE.php">Search...</a></li>
</ul>

<section id="Event">
 <h2> Staff Table: </h2>
 <p> Choose which member of staff's details that you wish to remove.<br><Br> You will then be directed to view an updated version to the table.</p>
 <?php
$conn=mysqli_connect('localhost', 'root', '', 'staff');
// Check connection
if (mysqli_connect_errno()) 
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($conn,"SELECT * FROM staff_members");
echo "<table>
<thead>
<tr>
<th>Username</th>
<th>firstname</th>
<th>surname</th>
<th>delete</th>   
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) 
{
echo "<tbody data-link='row' class='rowlink'>";
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" .$row['surname']. "</td>";	
echo "<td><a href=\"UserDeletePAGE.php?username=".$row['username']."\">Delete</a></td>";
echo "</tr>";
echo "</tbody>";    
}
echo "</table>";
mysqli_close($conn);

	
	require_once 'Delete.php';

	use \read\DeleteStaffMember;
	
	$DisplayResults = new DeleteStaffMember();
	
?>	</section>
<footer> 
</footer>