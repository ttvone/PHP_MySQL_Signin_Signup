<?php
session_start();
require_once './configs/database.php';

$user_login = null;

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
{
    $user_id    = $_SESSION['user_id'];
    $sql        = "SELECT * FROM users WHERE user_id = ?";
    $stmt       = $mysqli->prepare($sql);
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $result     = $stmt->get_result();
    $user_login = $result->fetch_assoc();
    if(empty($user_login)) 
    {
        header('Location: /actions/signout.php');
    }
}
else 
{
    header('Location: /signin.php');
}