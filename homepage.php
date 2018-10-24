<header>
    <title>HomePage</title>
    <link rel="stylesheet" href="stylesheethomepage.css" />
    <meta charset="utf-8" />
 <div class="container">
<section id="Intro">
<img src="logo.png" align="left"/><h1>Welcome to Beauden and Co. Staff website.</h1></section>
<div class="nav">
<ul>
  <li><a href="homepage.php">Home</a></li>
  <li><a href="CreatePAGE.php">Add new staff member</a></li>
  <li><a href="deletePAGE.php">Delete existing staff from table</a></li>
  <li><a href="updatePAGE.php">Update Events Table</a></li>
  <li><a href="searchPAGE.php">Search...</a></li>
</ul>
</section>

 <li><a href="loginPAGE.php">Back to login page</a></li>
<article>
<h2> Welcome members of the Beauden&Co company. </h2>
<p>you are able to amend staff member details and keep up to dates with the events that our company <br>are attending or running over the next
calendar year. </br> New events will be added to the database when we hear about them and displayed upon this page.</p>
<p> Information about the London ART "30 years since" event in 2018.</p>

<?php 
//session_start();
//echo $_SESSION["username"];
//if(!isset($_SESSION["username"])) {
//	die("You must be logged in to view this page.");
//}
	require_once 'Login.php';
      require_once 'LoginListener.php';
use \Main\ObserverPattern\IObserver;
use \Main\ObserverPattern\LoginListener;
use \Main\ObserverPattern\Login;

	$login = new Login();
	$login->Attach(new LoginListener());
	$login->UserLogin();
?>

 <?php
require_once 'Gallery_parent.php';
require_once 'Renaissance_child.php';
require_once 'Modern_child.php';

use \Main\Gallery\Renaissance;	
use \Main\Gallery\Modern;

$RenaissanceArt[] = new Renaissance("Michelangelo", array("art1", "art2", "art3"));
$RenaissanceArt[] = new Renaissance("Donatello", array("art1", "art2", "art3"));
$RenaissanceArt[] = new Renaissance("Titian", array("art1", "art1", "art3"));

echo "Renaissance artists work featured at London 2018 historic display:<br>";
foreach($RenaissanceArt as $Renaissance)
{
	echo " {$Renaissance->Artist}<br/>";
}
echo "<br><br><br>";

$ModernArt[] = new Modern("Richard Serra", array("art1", "art2", "art3"));
$ModernArt[] = new Modern("Damien hirst", array("art1", "art2", "art3"));
$ModernArt[] = new Modern("Gerhard Richter", array("art1", "art2", "art3"));


echo "Modern artist work that are featured at London 2018 historic display:<br>";

foreach($ModernArt as $Modern)
{
	echo " {$Modern->Artist}<br/>";
}
?>
<section id="Event">	
<h3>Events and Meetings for the staff 2018</h3>	
<h5> Email Leahcahill19.07@hotmail.com for more information or 
if you wish to attend.</h5>
<table border=1>
	<thead><tr><th>Event ID:</th><th>Event description:</th><th>Date:</th><th></th></tr></thead>
	<?php 
	require'eventSection.php';
	require_once 'IRead.php';

	use \read\IRead;
	use \read\Events;
	$events1 = new Events();
	$events1->ReadDB();?>
	
</section>
</article></div>



</body>



<br><br>


</html>