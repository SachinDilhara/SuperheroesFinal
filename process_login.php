<?php

session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superheroes";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $User_Name = $_POST["User_Name"];
    $Password = $_POST["Password"];

    $errors = array();

   
    if (empty($User_Name)) {
        $errors['User_Name'] = "Username is required.";
    }
    if (empty($Password)) {
        $errors['Password'] = "Password is required.";
    }

    
    if (empty($errors)) {
        $sql = "SELECT * FROM users WHERE User_Name = '$User_Name'";
        $result = $conn->query($sql);

       if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if (password_verify($Password, $row["Password"])) {
        $_SESSION['ID'] = $row['ID'];
        header("Location: index.php");
        exit();
    } else {
        echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
                <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: Incorrect Password</h1>
                <a href='log.php' style='color: #0000cc;'>Go Back</a>
              </div>";
    }
} else {
    echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
            <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: User Not Found</h1>
            <a href='log.php' style='color: #0000cc;'>Go Back</a>
          </div>";
}
    }
}

    $conn->close();

?>