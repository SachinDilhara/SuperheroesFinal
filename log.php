<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
                echo "<div style='text-align: center; border: 2px solid #00cc00; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ccffcc;'>
                        <h1 style='color: #000000; font-weight: bold; font-size: 24px;'>Login successful</h1>
                      <a href='index.php' style='color: #0000cc;'>Continue to Dashboard</a>
                      </div>";
					  
            } else {
                echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
                        <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: Incorrect Password</h1>
                        <a href='login.php' style='color: #0000cc;'>Go Back</a>
                      </div>";
            }
			  if (password_verify($Password, $row["Password"])) {
        $_SESSION['ID'] = $row['ID'];
        header("Location: index.php");
        exit();
        } else {
            echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
                    <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: User Not Found</h1>
                    <a href='login.php' style='color: #0000cc;'>Go Back</a>
                  </div>";
        }
		
    } else {
        
        foreach ($errors as $error) {
            echo "<div style='text-align: center; border: 2px solid #cc0000; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ffcccc;'>
                    <h1 style='color: #cc0000; font-weight: bold; font-size: 24px;'>Error: " . $error . "</h1>
                    <a href='login.php' style='color: #0000cc;'>Go Back</a>
                  </div>";
        }
    }
	
    $conn->close();
         }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="style.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section id="Login">
    <h1 style="color: red;">Login</h1>
    <center>
        <div class="container">
            <form name="login_form" method="post" action="process_login.php">

                <div class="form_box">
                    <div class="input_row">
                        <input type="text" placeholder="User_Name*" name="User_Name">
                  
                    </div>

                    <div class="input_row">
                        <input type="password" placeholder="Password*" name="Password">
            
                            
                    </div>

                    <div class="input_row">
                        <input type="submit" value="Login">
                    </div>
                </div>
				<h2>If You Are Not Registered Yet <a href='register.php' style='color: #0000cc;'>REGISTER HERE</a></h2>
            </form>
        </div>
    </center>
</section>
</body>
</html>
