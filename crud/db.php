<?php
$servername = "db";
$username = "capp1";
$password = "new57";
$dbname = "capp1";
// creating connection$
$conn = new mysqli($servername, $username, $password, $dbname);// check connerction

if ($conn-> connect_error){
    die("connection failed:" .$conn->connect_error);
}
?>