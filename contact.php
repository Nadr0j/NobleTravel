<?php

session_start();

require_once "/phpmailer/PHPMailerAutoload.php";

$errors = [];


print_r($_POST);

if(isset($_POST['name'], $_POST['email'], $_POST['message'])) {
    $fields = [
        'name' = $_POST['name'],
        'email' = $_POST['email'],
        'message' = $_POST['message'],
        
    ];
    
    foreach
    
} else {
    $errors[] = "Something went wrong.";
}