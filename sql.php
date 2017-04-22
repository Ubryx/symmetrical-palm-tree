<?php
$host   = "localhost";
$user   = "username";
$pass   = "password";
$db     = "db";
$mysqli = new mysqli("localhost", "username", "password", "db");
if ($mysqli->connect_errno) {
	printf("Error: Unable to connect to MySQL database.\n");
	printf("Debugging errno: %s\n", $mysqli->connect_errno);
    printf("Debugging error: %s\n", $mysqli->connect_error);
}
?>
