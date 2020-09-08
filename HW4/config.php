<?php
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

const driver = 'mysql';
const SERVER = 'localhost';
const DB = 'historical_games';
const LOGIN = 'root';
const PASS = 'root';


try {    
    $dbStr = driver.':dbname='.DB.';host='.SERVER;
    $db = new PDO ($dbStr, LOGIN, PASS);
    } catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try{      
    if(isset($_POST['STR'])){
        $id = $_POST['STR']; 
        $result = $db->query("SELECT * FROM `goods` WHERE id>$id LIMIT 3");
        $error_array = $db->errorInfo();
 
	   if($db->errorCode() != 0000)
 
	   echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
 
	   while($row = $result->fetch())
	       {
		  $res[]=$row;
	       }
        echo json_encode ($res);}
    else {
        $id = 0;    
        $result = $db->query("SELECT * FROM `goods` WHERE id>$id LIMIT 3");
        $error_array = $db->errorInfo();
 
	   if($db->errorCode() != 0000)
 
	   echo "SQL ошибка: " . $error_array[2] . '<br /><br />';
 
	   while($row = $result->fetch())
	       {
		  $res[]=$row;
	       }
    }    
}
catch(PDOException $e)
{
	die("Error: ".$e->getMessage());
}
