<!DOCTYPE html>
<html>
<head>
    <title>HomePage</title>
    <link rel="stylesheet" href="stylesheetpagess.css"/>
    <meta charset="utf-8" />
</head>
<body>
<section id="Intro">
<img src="logo.png" align="left"/><h1>Update description to event</h1></section>
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="CreatePAGE.php">Add new staff member</a></li>
  <li><a href="deletePAGE.php">Delete existing staff from table</a></li>
  <li><a href="updatePAGE.php">Update Events Table</a></li>
  <li><a href="searchPAGE.php">Search...</a></li>
</ul>

 <article>  <p>Edit Event Description</p>
<form method = "get" action = "updatednewtablePAGE.php">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">               
                     <tr>
                        <td width = "100">Event ID</td>
                        <td><input name = "EventID" type = "text" 
                           id = "EventID"></td>
                     </tr>  
                     <tr>
                        <td width = "100">Event Description</td>
                        <td><input name = "EventDes" type = "text"
                           id = "EventDes"></td>
                     </tr><tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr><tr>
                        <td width = "100"> </td>
                        <td><input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>                
                  </table>
               </form>


<div id="form1">

<table border=1><h2>Current events:</h2>
	<thead><tr><th>Event ID</th><th>Description</th>
	<th>Date of event</th></thead></br>
	<?php 
	require_once 'IRead.php';
	require_once 'update.php';
	use \read\IRead;
	use \read\update;
	
	$DisplayResults2 = new update();
	$DisplayResults2->ReadDB();

?>
	</div>
</div>
<footer> 
</footer>