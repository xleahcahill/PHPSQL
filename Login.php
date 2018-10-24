<?php
namespace Main\ObserverPattern;

require_once 'ObjectProperties.php';
require_once 'IObservable.php';

use \Main\ObjectProperties;

class Login extends ObjectProperties implements IObservable
{
	// Attributes
	private $_observers = [];
	private $_username;
	private $_password;
	
	// Constructor
	// Methods for properties
	// Getters and Setters	
	// Methods
	
	public function UserLogin()
	{
	require_once 'dbstuff.php';
	$conn = mysqli_connect("localhost","root", "", "staff");	
	
	$username=$_POST["username"];
	$password=$_POST["password"];

		 $sql = mysqli_query($conn,"SELECT * FROM staff_members WHERE username = '".$username."' AND password = '".$password."'");   
			 if(! $sql )  {
				 // if sql results is 0.
               die(': ' . mysqli_error($conn));
            }
			// if succeeds 
			// 		
			//session_start();
			//$_SESSION["username"] = $username;
 
		$this->Notify();
	}

	public function Attach(IObserver $observer)
	{
		$this->_observers[] = $observer;
	}
	
	public function Detach(IObserver $observer)
	{
		$index = array_search($observer, $this->_observers, true);
		if($index !== false)
		{
			array_splice($this->_observers, $index, 1);
		}
	}
	
	public function Notify()
	{
		foreach($this->_observers as $observer)
		{
			$observer->logg($this);
		}
		
	}
	

}
?>