<?php

$hostname = "localhost";
$dbuser = "census";
$dbpassword = "Admin123@&";
$dbname = "census bureau";

$db = mysqli_connect ($hostname, $dbuser, $dbpassword, $dbname);

if ($db) {
    echo "Connection successful";
} else {
    echo "Connection failed";
}
?>