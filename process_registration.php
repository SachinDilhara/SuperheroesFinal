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

    $First_Name = $_POST["First_Name"];
    $Last_Name = $_POST["Last_Name"];
    $Email = $_POST["Email"];
    $User_Name = $_POST["User_Name"];
    $Password = $_POST["Password"];

    $errors = array();

   
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format.";
    }

    
    if (empty($First_Name)) {
        $errors['First_Name'] = "First Name is required.";
    }

    
    if (empty($Last_Name)) {
        $errors['Last_Name'] = "Last Name is required.";
    }
	
	if (empty($User_Name)) {
        $errors['User_Name'] = "User Name is required.";
    }
	
	if (empty($Password)) {
        $errors['Password'] = "Password is required.";
    }

    
    $emailCheckQuery = "SELECT * FROM users WHERE email = '$Email'";
    $usernameCheckQuery = "SELECT * FROM users WHERE user_name = '$User_Name'";

    $emailResult = $conn->query($emailCheckQuery);
    $usernameResult = $conn->query($usernameCheckQuery);

    if ($emailResult->num_rows > 0) {
        $errors['email'] = "Email already taken.";
    }

    if ($usernameResult->num_rows > 0) {
        $errors['user_name'] = "Username already taken.";
    }

    
    if (empty($errors)) {
        $hashed_password = password_hash($Password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (First_Name, Last_Name, Email, User_Name, Password) VALUES ('$First_Name', '$Last_Name', '$Email', '$User_Name', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "<div style='text-align: center; border: 2px solid #00cc00; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ccffcc;'>
                    <h1 style='color: #000000; font-weight: bold; font-size: 24px;'>Registration successful</h1>
                  <a href='log.php' style='color: #0000cc;'>Log In</a>
                  </div>";
        } else {
            echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
                    <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: Registration Not Successful</h1>
                    <a href='Register.php' style='color: #0000cc;'>Go Back</a>
                  </div>";
        }
    } else {
       
        foreach ($errors as $error) {
            echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
                    <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: " . $error . "</h1>
                    <a href='register.php' style='color: #0000cc;'>Go Back</a>
                  </div>";
        }
    }

    $conn->close();
}
?>
