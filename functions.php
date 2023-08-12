<?php
$hostname = "localhost";
$username = "root"; 
$password = ""; 
$database = "superheroes";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


function addProject($title, $description, $image) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superheroes";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        return "Connection failed: " . $conn->connect_error;
    }

    $title = $conn->real_escape_string($title);
    $description = $conn->real_escape_string($description);
    $image = $conn->real_escape_string($image);

    $sql = "INSERT INTO project (Title, Description, Image) VALUES ('$title', '$description', '$image')";
    
    if ($conn->query($sql) === TRUE) {
        $conn->close();
        return true;
    } else {
        $error = "Error: Unable to add project. Error details: " . $conn->error;
        $conn->close();
        return $error;
    }
}

function updateProject($id, $title, $description, $image) {
    global $conn; 

    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $image = mysqli_real_escape_string($conn, $image);

    $query = "UPDATE project SET Title='$title', Description='$description', Image='$image' WHERE ID=$id";

    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return "Error updating project: " . mysqli_error($conn);
    }
}

function deleteProject($id) {
    global $conn;

    $query = "DELETE FROM project WHERE ID = $id";

    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return "Error deleting project: " . mysqli_error($conn);
    }
}

?>
