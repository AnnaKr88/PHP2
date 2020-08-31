<?php
const SERVER = "localhost";
const DB = "ann";
const LOGIN = "root";
const PASS = "root";

$connect = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Error: ".mysqli_error($connect));

mysqli_query($connect, "SET NAMES 'utf8'"); 
mysqli_query($connect, "SET CHARACTER SET 'utf8'");

if(!mysqli_set_charset($connect, "utf8")){
    printf("Error: ".mysqli_error($connect));
};

function getAll($connect, $table, $orderby = 'id') {
    $query = "SELECT * FROM {$table} order by {$orderby} desc";
    $result = mysqli_query($connect, $query);

    if (!$result)
        die(mysqli_error($connect));

    $n = mysqli_num_rows($result);
    $res = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $res[] = $row;
    }

    return $res;
};

$imgs = getAll($connect, 'image');
