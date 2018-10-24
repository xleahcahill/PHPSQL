<!DOCTYPE html>
<html>
<head>
    <title>Page</title>
    <link rel="stylesheet" href="updated.css"/>
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
<li><a href="searchPAGE.php">click here to go to previous page </a></li>
<div id="form1">
<table border=1><h2>Your search results:</h2>

	<thead><tr><th>Username</th><th>First name</th>
	<th>Last name</th><th>Email</th><th>City</th><th>Date created</th></thead></br>

</div>
	<?php  
	require_once 'IRead.php';
	require_once 'search.php';
	use \read\IRead;
	use \read\SearchStaffMember;
	
	$searchone = new SearchStaffMember();	
	$searchone->searchstaff();

	
	?>
	<footer>
	</footer>
	</html>
	
	
	