<?php
namespace Main;	
class ObjectProperties
{

	public function __get($property)
	{
		$method = "Get{$property}";			// Create method name
		if(method_exists($this, $method))	// Check function exists
		{
			return $this->$method();		// Call it
		}
		return;
	}
	
	public function __set($property, $value)
	{
		$method = "Set{$property}";
		if(method_exists($this, $method))
		{
			$this->$method($value);
		}
		return;
	}
}
	?>