<?php 

/*echo "<pre>";
print_r($_SERVER);
echo "</pre>";*/

define("SERVER_ROOT", dirname(__FILE__)); 
define('SITE_ROOT' , 'http://localhost/MVC/');  

 
require_once(SERVER_ROOT . '/Controller/' . 'router.php'); 

function debuga($arr){
	echo "<pre>";
	print_r($arr);
	echo "</pre>";

}



?>