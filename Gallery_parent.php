<?php
namespace Main\Gallery;

require_once 'ObjectProperties.php';	

use \Main\ObjectProperties;		

class Gallery extends  ObjectProperties
{
	// Attributes
	private $_artist;
	private $_art_title;
		
	
	// Constructor
	public function __construct($artist, $art_title)
	{
		$this->_artist = $artist;
		$this->_art_title = $art_title;
	}
	
	// Methods for properties
	public function GetArtist()
	{
		return $this->_artist;
	}
	
	public function SetArtist($value)
	{
		$this->_artist = $value;
		return;
	}
	
	public function GetTitle()
	{
		return $this->_art_title;
	}
	
	public function SetTitle($value)
	{
		$this->_art_title = $value;
		return;
	}	
	
	// Methods

}
?>