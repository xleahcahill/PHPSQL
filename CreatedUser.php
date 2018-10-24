<!DOCTYPE html>
<html>
<head>
    <title>Create Page</title>
    <link rel="stylesheet" href="stylesheetotherpage.css"/>
    <meta charset="utf-8" />
</head>
<div class="nav">
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="CreatePAGE.php">Add new staff member</a></li>
  <li><a href="deletePAGE.php">Delete existing staff from table</a></li>
  <li><a href="updatePAGE.php">Update Events Table</a></li>
  <li><a href="searchPAGE.php">Search...</a></li>
</ul>
<br></div>
<li><a href="CreatePAGE.php">click here to go to previous page </a></li>
<div id="form1">
<table border=1><h2>Updated Staff table:</h2>

	<thead><tr><th>Username</th><th>Date User Created</th>
	<th>Email </th><th> Name </th><th>Surname</th>
	<th> Street</th><th>City</th><th>Postcode</th></tr></thead></br>

</div>
	<?php  
	require_once 'IRead.php';
	require_once 'Create.php';
	use \read\IRead;
	use \read\Create;
	
	$createone = new Create();
	
	$createone->createstaff();
	$createone->readDB();
	
	?>
	<footer>
	</footer>
	</html>
	
	
	