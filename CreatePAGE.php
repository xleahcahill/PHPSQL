<!DOCTYPE html>
<html>
<head>
    <title>HomePage</title>
    <link rel="stylesheet" href="stylesheetpagess.css"/>
    <meta charset="utf-8" />
</head>
<body>

<section id="Intro">
<img src="logo.png" align="left"/><h1>Creating a member to the Staff Table</h1></section>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="CreatePAGE.php">Add new staff member</a></li>
  <li><a href="deletePAGE.php">Delete existing staff from table</a></li>
  <li><a href="updatePAGE.php">Update Events Table</a></li>
  <li><a href="searchPAGE.php">Search...</a></li>
</ul>
   <article>
   
<p> Add a new member of Staff <p>
<p> Fill in the forms with the information of the new member of staff.<br>
Remember, ensure that all usernames are unique. </p>
<div id="form1">
<table border=1>
	<thead><tr><th>Username</th><th>Date User Created</th>
	<th>Email </th><th> Name </th><th>Surname</th>
	<th> Street</th><th>City</th><th>Postcode</th></tr></thead></br>
	<?php 
	require_once 'IRead.php';
	require_once 'Create.php';
	use \read\IRead;
	use \read\Create;
	
	$DisplayResults = new Create();
	$DisplayResults->ReadDB();
?>
<form action="CreatedUser.php" method="post">
Username:   <input type="text" name="username"><br><br>
Date Created: <input type="text" name="datecreated"><br/>
Email:        <input type="text" name="email"/><br/>
Password:     <input type="text" name="password"/><br/>
Firstname: <input type="text" name="firstname" /><br><br>
Lastname: <input type="text" name="surname" /><br><br>
Street:<input type="text" name="street" /><br/>
City: <input type="text" name="city"/><br/>
Postcode: <input type="text" name="postcode" /><br/>
<input type="submit" />
</form><br><br><br>
<h3> Current Staff Database:</h3>
	
	</div>
</article>
<footer> 
</footer>