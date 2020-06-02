<?php 

class DataBaseConnecter { 
				
	private static $con; 
				
	private final function __construct() { 
		echo __CLASS__ . " initialize only once "; 
	} 
	
	public static function getConnect() { 
		if (!isset(self::$con)) { 
			self::$con = new DataBaseConnecter(); 
		} 
		
		return self::$con; 
	} 
} 

$con = DataBaseConnecter::getConnect(); 
$conn = DataBaseConnecter::getConnect(); 

var_dump($con == $conn); 
?> 
