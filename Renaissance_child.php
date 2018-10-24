<?php
namespace Main\Gallery;

require_once "Gallery_parent.php";


class Renaissance extends Gallery
{// Attributes
	private $_artist;
	private $_art_title;
	
	// Constructor
	public function __construct($artist, $art_title)
	{
		parent::__construct($artist, $art_title);
		
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
		$this->_art_title= $value;
		return;
	}
	
	// Methods
	

	}
?>