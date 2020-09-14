<?php
session_start();
require_once 'templates/Twig/Autoloader.php';
Twig_Autoloader::register();
define ('DRIVER', 'mysql');
define ('SERVER', 'localhost');
define ('DB', 'historical_games');
define ('LOGIN', 'root');
define ('PASS', 'root');
