<?php
session_start();
require_once 'templates/Twig/Autoloader.php';
Twig_Autoloader::register();
define ('driver', 'mysql');
define ('SERVER', 'localhost');
define ('DB', 'historical_games');
define ('LOGIN', 'root');
define ('PASS', 'root');
//const driver = 'mysql';
//const SERVER = 'localhost';
//const DB = 'historical_games';
//const LOGIN = 'root';
//const PASS = 'root';


$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Error: ".mysqli_error($connect));

mysqli_query($connect, "SET NAMES 'utf8'"); 
mysqli_query($connect, "SET CHARACTER SET 'utf8'");

if(!mysqli_set_charset($connect, "utf8")){
    printf("Error: ".mysqli_error($connect));
}