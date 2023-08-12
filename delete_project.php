<?php
require_once('db.php');

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    
    $query = "DELETE FROM project WHERE ID = $id";

    if (mysqli_query($conn, $query)) {
        session_start();
        $_SESSION['delete_success'] = true; 
        echo "<div style='text-align: center; border: 2px solid #00cc00; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ccffcc;'>
                <h1 style='color: #000000; font-weight: bold; font-size: 24px;'>Delete Successfully</h1>
              <a href='index.php' style='color: #0000cc;'>HOME</a>
			  </div>";
    } else {
        echo "Error deleting project: " . mysqli_error($conn);
    }
} else {
    echo "Invalid project ID";
}
?>
