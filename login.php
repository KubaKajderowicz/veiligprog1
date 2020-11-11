<?php

include "db.php";

print($_POST["username"]).PHP_EOL;
print($_POST["password"]);

$username = $_POST["username"];
$password = $_POST["password"];

$myConn = new DB;

$query = "SELECT * FROM users WHERE username = '$username'";

$result = $myConn->executeSQL($query);

var_dump($result);

if (!empty($result)) { 
    echo "<br> Login as $username <br>";
    // print_r print data uit dat voor normale mensen leesbaar is
    print_r($result);
} else {
    echo "<br> Invalid login! <br>";
}

?>