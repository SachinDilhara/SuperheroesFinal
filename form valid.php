<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superheroes";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Number = $_POST["Number"];
    $message = $_POST["message"];

    $errors = array();

   
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    
    if (!preg_match("/^[a-zA-Z ]*$/", $Name)) {
        $errors['Name'] = "Invalid Name format.";
    }

    
    if (!preg_match("/^[0-9]*$/", $Number)) {
        $errors['Number'] = "Only Numbers are allowed.";
    }
	
	if (empty($message)) {
        $errors['message'] = "message is required.";
    }
	
	if (empty($errors)) {
         echo "<div style='text-align: center; border: 2px solid #00cc00; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ccffcc;'>
                    <h1 style='color: #000000; font-weight: bold; font-size: 24px;'>Massage Send Successfull</h1>
                  <a href='index.php' style='color: #0000cc;'>Home</a>
                  </div>";
				  
    } else {
       
        foreach ($errors as $error) {
            echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
                    <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: " . $error . "</h1>
                    <a href='index.php' style='color: #0000cc;'>Go Back</a>
                  </div>";
        }
    }
}
    $conn->close();
	