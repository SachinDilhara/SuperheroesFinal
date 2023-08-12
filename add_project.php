<?php
require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = $_POST["title"];
    $description = $_POST["description"];
    $image = $_POST["image"];

    $result = addProject($title, $description, $image);

    if ($result === true) {
        echo "<div style='text-align: center; border: 2px solid #00cc00; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ccffcc;'>
                <h1 style='color: #000000; font-weight: bold; font-size: 24px;'>New Project Added Successfull</h1>
              <a href='index.php' style='color: #0000cc;'>HOME</a>
			  </div>";
    } else {
        echo "Error: " . $result;
    }
}
?>