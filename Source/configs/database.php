<?php
$mysqli = new mysqli("127.0.0.1","root","1234","phpdb");

// Check connection
if ($mysqli->connect_errno) {
    exit("Failed to connect to MySQL: " . $mysqli->connect_error);
}