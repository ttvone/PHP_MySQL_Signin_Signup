<?php
session_start();

include_once '../configs/database.php';

if(isset($_POST['username']) && isset($_POST['password'])) 
{
    $username   = trim($_POST['username']);
    $password   = trim($_POST['password']);
    
    $sql        = "SELECT * FROM users WHERE user_username = ?";
    $stmt       = $mysqli->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $member = $result->fetch_assoc();

    if(!empty($member)) 
    {
        if(password_verify($password, $member['user_password']))
        {
            $_SESSION['user_id'] = $member['user_id'];
            header('Location: /profile.php');
        }
        else 
        {
            echo '<script>';
            echo 'alert("Invalid password !");';
            echo 'history.back();';
            echo '</script>';
        }
    }
    else 
    {
        echo '<script>';
        echo 'alert("Invalid username !");';
        echo 'history.back();';
        echo '</script>';
    }
}
else 
{
    echo '<script>';
    echo 'alert("Error not found username or password");';
    echo 'history.back();';
    echo '</script>';
}