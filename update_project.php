<!DOCTYPE html>
<html>
<head>
    <title>Update Project</title>
    
</head>
<body>
    <?php
    require_once('db.php'); 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $title = $_POST["title"];
        $description = $_POST["description"];
        $image = $_POST["image"];

        if (!empty($id) && !empty($title) && !empty($description) && !empty($image)) {
            $title = mysqli_real_escape_string($conn, $title);
            $description = mysqli_real_escape_string($conn, $description);
            $image = mysqli_real_escape_string($conn, $image);

            $query = "UPDATE project SET Title='$title', Description='$description', Image='$image' WHERE ID=$id";
            
            if (mysqli_query($conn, $query)) {
				echo "<div style='text-align: center; border: 2px solid #00cc00; padding: 20px; margin: 20px auto; max-width: 400px; background-color: #ccffcc;'>
                <h1 style='color: #000000; font-weight: bold; font-size: 24px;'>Project updated successfully.</h1>
                <a href='index.php' style='color: #0000cc;'>HOME</a>
			  </div>";
            } else {
				
                echo "Error updating project: " . mysqli_error($conn);
            }
        }
    } elseif (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];

        $query = "SELECT * FROM project WHERE ID = $id";
        $result = mysqli_query($conn, $query);
        $project = mysqli_fetch_assoc($result);
        ?>
        
		<h2 style="color: red"; ="margin-bottom: 10px;"><center>Update Project</center></h2>
        
        <form name="custom_form3" action="update_project.php" method="POST" style="width: 550px; margin: 0 auto; padding: 20px; background-color: #b4b4b4; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <input type="hidden" name="id" value="<?php echo $id; ?>">


        <label for="title" style="font-weight: bold; display: block; margin-bottom: 5px;">Title:</label>
        <input type="text" name="title" value="<?php echo $project['Title']; ?>" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

        <label for="description" style="font-weight: bold; display: block; margin-bottom: 5px;">Description:</label>
        <textarea name="description" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;"><?php echo $project['Description']; ?> </textarea>

        <label for="image" style="font-weight: bold; display: block; margin-bottom: 5px;">Image URL:</label>
        <input type="text" name="image" value="<?php echo $project['Image']; ?>" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

        <input type="submit" value="Update Project" style="background-color: #075680; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
    </form>

       
    <?php
    } else {
        echo "Invalid project ID";
    }
    ?>
</body>
</html>
