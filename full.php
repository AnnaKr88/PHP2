<?php
require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
};

try {
  $dbh = new PDO('mysql:dbname=ann;host=localhost', 'root', 'root');
} catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
  $sql = "SELECT * FROM image where id=$id";
  $sth = $dbh->query($sql);
  while ($row = $sth->fetchObject()) {
    $data[] = $row;
  }
  
  unset($dbh); 

  $loader = new Twig_Loader_Filesystem('templates');
  
  $twig = new Twig_Environment($loader);
  
  $template = $twig->loadTemplate('full.tmpl');

  echo $template->render(array (
    'data' => $data,
  ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}