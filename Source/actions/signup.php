<?php
include_once '../configs/database.php';

if(isset($_POST['name']) && isset($_POST['username']) && isset($_POST['password'])) 
{
    $name       = trim($_POST['name']);
    $username   = trim($_POST['username']);
    $password   = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    $sql        = 'INSERT INTO users (user_name, user_username, user_password) VALUES(?, ?, ?)';
    $stmt       = $mysqli->prepare($sql);
    $stmt->bind_param('sss', $name, $username, $password);
    
    if($stmt->execute()) 
    {
        header('Location: /signin.php');
    } 
    else 
    {
        echo '<script>';
        echo 'alert("' . $stmt->error . '");';
        echo 'history.back();';
        echo '</script>';
    }
}
else 
{
    echo '<script>';
    echo 'alert("Error not found name or username or password");';
    echo 'history.back();';
    echo '</script>';
}