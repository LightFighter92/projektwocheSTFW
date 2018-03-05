<?php
/**
 * Created by PhpStorm.
 * User: Dominic
 * Date: 05.03.2018
 * Time: 08:27
 */

$servername = "localhost";
$username = "root";
$password = "";
$db = "STFW";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>