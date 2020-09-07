<?php
class M_User {
    
    function newUser($connect, $name, $login, $email, $pass)
{

    $nu = "INSERT INTO users (name, login, email, pass, rights) VALUES ('%s','%s','%s','%s', 1)";

    $query = sprintf($nu, mysqli_real_escape_string($connect, $name), mysqli_real_escape_string($connect, $login), mysqli_real_escape_string($connect, $email), mysqli_real_escape_string($connect, $pass));

    $result = mysqli_query($connect, $query);

    if (!$result) {
        die(mysqli_error($connect));
    }

    return true;
}

function user($connect, $login) {
    
$user = "SELECT * FROM users where login= '$login'";

$result = mysqli_query($connect, $user);

if (!$result) {
        die(mysqli_error($connect));
    }
    
    return $result;
}
}
