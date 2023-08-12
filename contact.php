<?php

$name = $email = $message = '';
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    
    $errors = validateAndSanitizeForm($_POST);

    if (empty($errors)) {
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Message: " . $message . "<br>";
        exit; 
    }
}
?>