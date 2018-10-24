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
<li><a href="UpdatePAGE.php">click here to go to previous page </a></li>
<div id="form1">
<table border=1><h2>Updated Events table:</h2>

	<thead><tr><th>ID</th><th>Description</th>
	<th>Date</th></thead></br>

</div>
	<?php  
	require_once 'IRead.php';
	require_once 'update.php';
	use \read\IRead;
	use \read\update;
	
	$updateone = new update();
	
	$updateone->updateevent();
	$updateone->readDB();
	
	?>
	<footer>
	</footer>
	</html>
	
	
	