<?php
include_once '../configs/database.php';

$result = $mysqli->query('SELECT * FROM users');
echo '<pre>';
print_r($result->fetch_all(MYSQLI_ASSOC));
echo '</pre>';

// print_r($_POST);