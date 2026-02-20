<?php
include 'dbconnect.php';
 $error = '';
    $success = '';
if (isset($_POST['submit'])) {
     $name =filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS );
     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     $message = filter_var($_POST['message'], FILTER_SANITIZE_SPECIAL_CHARS );

    

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //echo" email is valid";
    }else{
        echo "email not valid";
    }

     $sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";
    $stmt = mysqli_query($con,$sql);

        $to = "petrosmushambadzi17@gmail.com";
        $subject = "New Submission from " . $name;
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";


        if (mail($to, $subject, $body, $headers)) {
            $success= "Success! Your message was saved and email sent.";
        }else {
            $error= "Message saved to database, but email failed to send.";
        }

        
        

}



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="contact.css">
     <link rel="stylesheet" type="text/css" href="header.css">
     <link rel="stylesheet" type="text/css" href="footer.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>CONTACT US</title>

      
</head>
<body>
     <header>
          <div class="main">
               <div class="sub-main">
                    <img class="logo" src="images/logo.png">
                    <nav class="nav">
                         <ul>
                              <li><a href="index.html">HOME</a></li>
                              <li><a href="about.html">ABOUT</a></li>
                              <li><a href="skills.html">SKILLS/PROJECTS</a></li>
                              <li><a href="contact.php">CONTACT</a></li>  
                         </ul>
                    </nav>
               </div>
          </div>
     </header>

     <div class="contact">
 
      <section>

          <div class="form-1">
               <h2>SEND A MESSAGE</h2>

               <?php 
               if($error != '' or $success != ''):  ?>

                 <div style="text-align: center; color: green; width: 100%; height: 15px; background-color: #d9c0a3;"><?php echo $error;?></div>

                 <div style="text-align: center; color: blue; width: 100%; height: 15px; background-color: #d9c0a3;"><?php echo $success;?></div>

                <?php endif;?>    
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
              
              <input type="text" id="name" name="name" placeholder="NAME" required><br>

              
              <input type="email" id="email" placeholder="EMAIL" name="email" required><br>

             
              <textarea id="message" name="message" placeholder="MESSAGE" required></textarea><br>

              <button type="submit" id="btn" name="submit">Send Message <i class="fa fa-paper-plane"></i></button>
               </form>
     
          </div>

     </section>
     
     <section class="main-1">
     	<div class="sub-main-1">
           <h1>CONTACT US</h1>
          <p>GET IN TOUCH WITH ME BY SENDING A MESSSAGE <br> USING THE FORM OR CALL ON THE NUMBER BELOW, <br>PAY ME A VISIT ON THE GIVEN ADDRESS </p>    
          </div>

          <div class="address-1">
               <div class="f-links">
                    <h4>Address</h4>
                    <a href="https://www.waze.com/live-map/directions/zw/matabeleland-south-province/bul,awayo/queens-park-west?to=place.ChIJSd6mRMBUtR4RA1D_m8KrAbY" target="_blank">
                         <i class="fa fa-map" aria-hidden="true"></i>
                         <span>10 Gredon Road <br>Queens Park West</span>
                    </a>
               </div>
               <div class="f-links">
                    <h4>Phone Number</h4>
                    <a href="#">
                         <i class="fa fa-phone" aria-hidden="true"></i>
                         <span>+263786968144</span>
                    </a>
               </div>
               <div class="f-links">
                    <h4>Email</h4>
                    <a href="mailto:petrosmushambadzi17@gmail.com">
                         <i class="fa fa-envelope" aria-hidden="true"></i>
                         <span>petrosmushambadzi17@gmail.com</span>
                    </a>
               </div>
          </div>
     </section>
     </div>
    
    <footer>
          <div class="footer-1">
               <div class="q-links">
                    <h4>NAVIGATION</h4>
                    <ul>
                         <li><a href="index.html">Home</a></li>
                         <li><a href="about.html">About</a></li>
                         <li><a href="skills.html">Skills</a></li>
                         <li><a href="contact.php">Contact</a></li>
                    </ul>
               </div>
               <div class="contact-11">
                    <!-- <h4>Contact Us</h4> -->
                    <div class="address">
                         <h6>ADDRESS</h6>
                         <a href="https://www.waze.com/live-map/directions/zw/matabeleland-south-province/bul,awayo/queens-park-west?to=place.ChIJSd6mRMBUtR4RA1D_m8KrAbY" target="_blank">
                         <i class="fa fa-map" aria-hidden="true"></i>
                         <span>10 Gredon Road Qweens <br>Park West Byo</span>
                    </a>
                    </div>

                    <div class="phone">
                         <h6>PHONE</h6>
                         <a href="#">
                         <i class="fa fa-phone" aria-hidden="true"></i>
                         <span>+263786968144</span>
                    </a>
                    </div>

                    <div class="email">
                         <h6>EMAIL</h6>
                         <a href="mailto:petrosmushambadzi17@gmail.com">
                         <i class="fa fa-envelope" aria-hidden="true"></i>
                         <span>petrosmushambadzi17@gmail.com</span>
                    </a>
                    </div>
               </div>
          </div>
          <div class="footer-2">
               <div class="copy">
                    <p>&copy All Rights Reserved. Designed by <i>Peter</i></p>
               </div>

               <div class="icon">
                    <a href="#" target="_blank">
                         <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>

                    <a href="#" target="_blank">
                         <i class="fa fa-twitter"></i>
                    </a>

                    <a href="#" target="_blank">
                         <i class="fa fa-instagram"></i>
                    </a>

                    <a href="#" target="_blank">
                         <i class="fa fa-linkedin"></i>
                    </a>
               </div>
          </div>
     </footer>   
</body>
</html>