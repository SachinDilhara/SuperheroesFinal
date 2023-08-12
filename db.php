<?php
$hostname = "localhost";
$username = "root"; 
$password = ""; 
$database = "superheroes";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
function insertProject($title, $description, $image) {
    global $conn;
    
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $image = mysqli_real_escape_string($conn, $image);
    
    $query = "INSERT INTO projects (Title, Description, Image) VALUES ('$title', '$description', '$image')";
    
    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false; 
    }
}
?>

<?php
function getProjects() {
    global $conn;
    
    $query = "SELECT * FROM project";
    $result = mysqli_query($conn, $query);
    
    $projects = array();
    
    while ($row = mysqli_fetch_assoc($result)) {
        $projects[] = $row;
    }
    
    return $projects;
}
?>

<?php
function updateProject($id, $title, $description, $image) {
    global $conn;
    
    $title = mysqli_real_escape_string($conn, $title);
    $description = mysqli_real_escape_string($conn, $description);
    $image = mysqli_real_escape_string($conn, $image);
    
    $query = "UPDATE projects SET Title='$title', Description='$description', Image='$image' WHERE ID=$id";
    
    if (mysqli_query($conn, $query)) {
        return true; 
    } else {
        return false; 
    }
}
?>

<?php
function deleteProject($id) {
    global $conn;
    
    $query = "DELETE FROM projects WHERE ID=$id";
    
    if (mysqli_query($conn, $query)) {
        return true; 
    } else {
        return false; 
    }
}
?>

