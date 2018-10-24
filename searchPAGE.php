<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="stylesheetpagess.css"/>
    <meta charset="utf-8" />
</head>
<body>
<section id="Intro">
<img src="logo.png" align="left"/><h1>Search staff</h1></section>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="CreatePAGE.php">Add new staff member</a></li>
  <li><a href="deletePAGE.php">Delete existing staff from table</a></li>
  <li><a href="updatePAGE.php">Update Events Table</a></li>
  <li><a href="searchPAGE.php">Search...</a></li>
</ul><article>
  <h2>Search by username</h2>
 
<form method = "POST" action = "searchpage2.php">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">               
                     <tr>
                        <td width = "100">Username:</td>
                        <td><input name = "username" type = "text" 
                           id = "username"></td>
                     </tr>  
                     </tr><tr>
                        <td width = "100"> </td>
                        <td><input name = "search" type = "submit" 
                              id = "search" value = "submit">
                        </td>
                     </tr>                
                  </table>
               </form>


<div id="form1">

<table border=1><h2>Staff table:</h2>
	<thead><tr><th>Username</th><th>Date added to system</th>
	<th>Email</th><th> firstname </th><th> Surname </th></thead></br>
	<?php 
	require_once 'IRead.php';
	require_once 'search.php';
	use \read\IRead;
	use \read\SearchStaffMember;
	

	$DisplayResults2 = new SearchStaffMember();
	$DisplayResults2->ReadDB();
	
?>
	</div>
</div>
</article>
<footer> 
</footer>