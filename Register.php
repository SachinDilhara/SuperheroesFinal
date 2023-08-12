<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="style.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<section id="Register">
    <h1 style="color: red;">Register</h1>
    <center>
        <div class="container">
            <form method="post" action="process_registration.php">

                <div class="form_box">
                    <div class="input_row">
                        <input type="text" placeholder="First_Name*" name="First_Name" >
                        
                    </div>
					
					<div class="input_row">
                        <input type="text" placeholder="Last_Name*" name="Last_Name">
        
                    </div>

                    <div class="input_row">
                        <input type="text" placeholder="E-mail*" name="Email">
               
                    </div>
					
					<div class="input_row">
                         <div class="input_row">
                         <input type="text" placeholder="User-Name*" name="User_Name" >
                         
                         </div>

                    </div>


                    <div class="input_row">
                        <input type="password" placeholder="Password*" name="Password" >
                       
                    </div>

                    <div class="input_row">
                        <input type="submit" value="Register">
                    </div>
                </div>
            </form>
			<h2>If You Are a Registered User <a href='log.php' style='color: #0000cc;'>LOG IN HERE</a></h2>
        </div>
    </center>
</section>
</body>
</html>
