<?php 

/*
 * 	Responsible for logging errors to the server logs 
 * 
 */
class ServerLogs {
		
	
	public static function TurnErrorsOn() 
	{
		return true; 
	}
	
	public static function LogError($class, $error_message)
	{
		if (ServerLogs::TurnErrorsOn()) {
			error_log("Class: $class, Error: $error_message");
		}
		
	}
	
	public static function LogDebugMessage($msg)
	{
		if (ServerLogs::TurnErrorsOn()) {
			error_log("Debug message: $msg");
		}
		 
	}
	
	public static function LogDebugMessageLevel($msg, $level)
	{
		
			if ($level == 1) 
				error_log("Green: $msg");
			else if ($level ==2) 
				error_log("Amber: $msg");
			else if ($level ==3) 
				error_log("XXX RED XXX: $msg");
		
		
	}
	
	public static function LogArray($array)
	{
		if (ServerLogs::TurnErrorsOn()) { 
			error_log("Is array = ".is_array($array).", contents = ".print_r($array, true));
		}
	}
}

?>