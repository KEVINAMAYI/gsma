<?php
require_once('constants.php');

/**
 * IMPLEMENTS COMMON METHODS TO BE USED IN VARIOUS ENTITIES
 */
class CommonImplementation 
{

	
//strip html tags, spaces and special chars
public  function secureData($value)
{

$secured_value = addslashes(strip_tags(trim($value)));
return $secured_value; 

}



}

?>