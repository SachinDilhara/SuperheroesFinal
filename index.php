<?php
session_start();
$loggedIn = isset($_SESSION['ID']);

include 'validation.php'; 
include 'sanitize.php';   


$errors = array();
$name = $email = $number = $message = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $message = $_POST["message"];

   
    $validationResult = validateForm($name, $email, $number, $message, $errors);

    if ($validationResult) {
        $name = sanitizeInput($name);
        $email = sanitizeInput($email);
        $number = sanitizeInput($number);
        $message = sanitizeInput($message);

        $successMessage = "Form submitted successfully!";
    }
}
?>



<!DOCTYPE html>
<html>
<head>
  <title>Superheroes</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="style.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body onload="changeImg()">

  <header>
  <div class="header-bg"></div>
    <div class="logo">
      <img src="logo1.png" alt="Logo">
    </div>
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle">&#9776;</label>
    <nav>
      <ul>
        <li><a href="#Main">Main</a></li>
        <li><a href="#Superhuman">Superhuman</a></li>
        <li><a href="#Mutants">Mutants</a></li>
        <li><a href="#Tech-based">Tech_based</a></li>
        <li><a href="#Anti-heroes">Anti_heroes</a></li>
		<li><a href="#contact">Contact</a></li>
		
      </ul>
    </nav>
  </header>
  
  <main>
    <div style="text-align: right;">
	<?php if (isset($_SESSION['ID'])) { ?>
        <button style="background-color: red; color: black; border: solid; padding: 10px 20px; border-radius: 5px; cursor: pointer;"><a href='register.php'>Log-Out</a></button>
        <?php } else { ?>
        <button style="background-color: red; color: black; border: solid; padding: 10px 20px; border-radius: 5px; cursor: pointer;"><a href='log.php'>Log-In</a></button>
        <?php } ?>
	</div>
	<section id="Main">
      <div class="hero">
        <h1>Superheroes</h1>
        <p>Superheroes are fictional characters that possess extraordinary abilities, often used to protect the innocent, fight against evil, and maintain justice in their respective fictional universes. These iconic figures have been captivating audiences across various forms of media, such as comic books, movies, and television shows, for many years.</p>
        <p>Superheroes often possess extraordinary powers, advanced technology, exceptional combat skills, or a combination of these attributes. Their remarkable capabilities enable them to confront supervillains, combat crime, and confront other threats that regular individuals cannot handle. Alongside their heroic endeavors, many superheroes face personal struggles, moral dilemmas, and complex storylines that provide depth to their characters. There are various types or categories of superheroes based on their powers, origins, and characteristics. Here are some common types of superheroes:</p>
        <ul>
          <li>Superhuman</li>
          <li>Mutants</li>
          <li>Tech-based</li>
          <li>Anti-heroes</li>
        </ul>
      </div>
    </section>

    <section id="Superhuman">
      <h2><center>Superhumans</center></h2>
      <p>Superhumans are individuals who possess extraordinary abilities beyond the scope of ordinary humans. These powers can be acquired through various means such as genetic mutations, exposure to radiation, advanced training, or mystical sources. Superhumans often use their powers to fight against evil and protect the innocent, embracing their abilities as a force for good. They are usually seen as beacons of hope, utilizing their powers for the betterment of society.</p>
      <p style="color: red;">Click on the images to see more details ....</p>
      <div class="grid-container">
        <div class="grid-item" onmouseover="showTooltip('superman-tooltip')" onmouseout="hideTooltip('superman-tooltip')" onclick="showSupermanDetails()">
  <div class="portfolio-item" onmouseover="showTooltip('portfolio-tooltip')" onmouseout="hideTooltip('portfolio-tooltip')">
  <img src="superman.jpg" alt="portfolio item" class="fade-in">
  <p>1.Superman</p>
  <div id="portfolio-tooltip" class="tooltip">
    <span class="tooltip-text">Click to view details</span>
  </div>
</div>
  <div id="superman-details" style="display: none;">
    <!-- Dynamic content to display Superman details -->
  </div>
</div>
        <div class="grid-item" onmouseover="showTooltip('superman-tooltip')" onmouseout="hideTooltip('superman-tooltip')" onclick="showWonderWomanDetails()">
  <div class="portfolio-item" onmouseover="showTooltip('portfolio-tooltip')" onmouseout="hideTooltip('portfolio-tooltip')">
  <img src="wonderwoman.jpg" alt="portfolio item" class="fade-in">
  <div id="portfolio-tooltip" class="tooltip">
    <span class="tooltip-text">Click to view details</span>
  </div>
</div>
          <p>2.Wonder Woman</p>
          <div id="wonderWomanDetails" style="display: none;">
            <!-- Dynamic content to display Wonder Woman details -->
        </div>
		</div>
         <div class="grid-item" onmouseover="showTooltip('superman-tooltip')" onmouseout="hideTooltip('superman-tooltip')" onclick="showHulkDetails()">
  <div class="portfolio-item" onmouseover="showTooltip('portfolio-tooltip')" onmouseout="hideTooltip('portfolio-tooltip')">
  <img src="hulk.jpg" alt="portfolio item" class="fade-in">
  <div id="portfolio-tooltip" class="tooltip">
    <span class="tooltip-text">Click to view details</span>
  </div>
</div>
          <p>3.Hulk</p>
		  <div id="hulkDetails" style="display: none;">
            <!-- Dynamic content to display Hulk details -->
        </div>
        </div>
      </div>

    </section>
	

    <section id="Mutants">
      <h2><center>Mutants</center></h2>
      <p>Mutants are a specific subset of superhumans whose powers are the result of genetic mutations. These mutations typically manifest during adolescence or under stressful circumstances. Mutants often face discrimination and prejudice due to their unique abilities, with some society members fearing their potential threat. The X-Men, a famous group of mutants led by Professor Charles Xavier, advocate for peaceful coexistence between mutants and humans while protecting both communities from threats.</p>
    
      <div class="grid-container">
        <div class="grid-item">
          <img src="wolverine.jpg" alt="wolverine">
          <p>1.Wolverine</p>
        </div>
        <div class="grid-item">
          <img src="rouge.jpg" alt="rouge">
          <p>2.Rouge</p>
        </div>
        <div class="grid-item">
          <img src="Cyclops.jpg" alt="Cyclops">
          <p>3.Cyclops</p>
        </div>
      </div>
    </section>

    <section id="Tech-based">
      <h2><center>Tech-based</center></h2>
      <p>Tech-based superheroes rely on advanced technology, gadgets, or suits to enhance their abilities and combat crime. They don't possess inherent superhuman powers but use their intelligence, engineering skills, and access to cutting-edge technology to become formidable crimefighters. These superheroes often design and create their own equipment, giving them an edge in battles against superpowered adversaries.</p>
    
      <div class="grid-container">
        <div class="grid-item">
          <img name="slide" width="400" height="200" >
		  <!-- Image Slider  -->
          <p>1.Batman</p>
        </div>
        <div class="grid-item">
          <img src="ironman.jpg" alt="iron man">
          <p>2.Iron Man</p>
        </div>
        <div class="grid-item">
          <img src="greenarrow.jpg" alt="Green Arrow">
          <p>3.Green Arrow</p>
        </div>
      </div>
    </section>

    <section id="Anti-heroes">
      <h2><center>Anti-Heroes</center></h2>
      <p>Anti-heroes are a unique breed of superheroes who possess complex and morally ambiguous characteristics. While they fight against evil, they often challenge traditional notions of heroism and exhibit flaws or unconventional methods. Anti-heroes may have a dark past, questionable motives, or engage in morally ambiguous actions. They blur the line between hero and villain, often operating in shades of gray.</p>
    
      <div class="grid-container">
        <div class="grid-item">
          <img src="venom.jpg" alt="venom">
          <p>1.Venom</p>
        </div>
        <div class="grid-item">
          <img src="constantine.jpg" alt="constantine">
          <p>2.Constantine</p>
        </div>
        <div class="grid-item">
          <img src="catwoman.jpg" alt="catwoman">
          <p>3.Catwoman</p>
        </div>
      </div>
    </section>

    
	
	
	
	<section id="project">
	  <h1 style="color: red";>Project Management System</h1>
	  <h3>Project Management system is a new opportunity that our website is offers to the users.
	  with this new feature users can add new superhero details to our website. so everyone can know about that 
	  superhero.</h3>
	
	<?php 


if (isset($_SESSION['ID'])) {
	
    echo '<form name="custom_form2" action="add_project.php" method="POST" style="width: 550px; margin: 0 auto; padding: 20px; background-color: #b4b4b4; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">

    <h2 style="margin-bottom: 10px;">Add New Project</h2>

    <label for="title" style="font-weight: bold; display: block; margin-bottom: 5px;">Title:</label>
    <input type="text" name="title" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="description" style="font-weight: bold; display: block; margin-bottom: 5px;">Description:</label>
    <textarea name="description" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;"></textarea>

    <label for="image" style="font-weight: bold; display: block; margin-bottom: 5px;"> URL for :</label>
    <input type="text" name="image" required style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 4px;">

    <input type="submit" value="Add Project" style="background-color: #075680; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">
</form>';
} else {
    echo "You Need To Be <a href='log.php'>Logged In</a> To Access The Project Management System";
}
?>

<?php 

if (isset($_SESSION['ID'])) {
    echo '<h2>Existing Projects</h2>
    <table style="border-collapse: collapse; width: 100%; border: 5px double #000000;">
        <tr>
            <th style="border: 2px double #000000; padding: 8px; background-color: #f2f2f2;">ID</th>
            <th style="border: 2px double #000000; padding: 8px; background-color: #f2f2f2;">Title</th>
            <th style="border: 2px double #000000; padding: 8px; background-color: #f2f2f2;">Description</th>
            <th style="border: 2px double #000000; padding: 8px; background-color: #f2f2f2;">Image</th>
            <th style="border: 2px double #000000; padding: 8px; background-color: #f2f2f2;">Actions</th>
        </tr>';
        
    require_once('db.php');

    $projects = getProjects(); 

    foreach ($projects as $project) {
        echo "<tr>";
        echo "<td style='border: 2px double #000000; padding: 8px; text-align: center;'>{$project['ID']}</td>";
        echo "<td style='border: 2px double #000000; padding: 8px; text-align: center;'>{$project['Title']}</td>";
        echo "<td style='border: 2px double #000000; padding: 8px; text-align: center;'>{$project['Description']}</td>";
        echo "<td style='border: 2px double #000000; padding: 8px; text-align: center;'><img src='{$project['Image']}' alt='Project Image' style='width: 200px; height: auto;'></td>";
        echo "<td style='border: 2px double #000000; padding: 8px; text-align: center;'><a href='update_project.php?id={$project['ID']}'>Update</a> | <a href='delete_project.php?id={$project['ID']}'>Delete</a></td>";
        echo "</tr>";
    }

    echo '</table><br>';
} 
?>
</section>

<h1><i><center> - THE END - </center> </i></h1>

<section id="contact">
	<h1 style="color: red;">Contact Us</h1>
     <center>
        <div class="container">
            <form name="custom_form" method="post" action="form valid.php">

                <div class="form_box">
                    <div class="input_row">
                        <input type="text" placeholder="Name*" name="Name">
     
                    </div>

                    <div class="input_row">
                        <input type="text" placeholder="Email*" name="Email" >
                        
                    </div>
					
					<div class="input_row">
                        <input type="text" placeholder="Number*" name="Number">
                    </div>
					
                    <div class="input_row">
                        <input type="text" placeholder="message*" name="message">
                        
                    </div>
                <div class="input_row">
                    <input type="submit" value="Submit">
                </div>
            </form>
    </center>
    </section>	

   

   
  </main>

  <footer>
    <div class="social-media">
      <a href="https://web.facebook.com"><img src="FB.png" alt="FB"></a>
      <a href="https://www.instagram.com/"><img src="IN.png" alt="IN"></a>
      <a href="https://twitter.com/"><img src="TW.png" alt="TW"></a>
      <a href="https://www.whatsapp.com/"><img src="WA.png" alt="WA"></a>
    </div>
    <p>-All Right Reserved-</p>
  </footer>
  

  
</body>
</html>