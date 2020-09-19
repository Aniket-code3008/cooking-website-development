<?php

try
{ 
    $db = new mysqli("localhost", "root", "", "my_contact");    
} catch (Exception $exc)
{
    echo $exc->getTraceAsString();
}

if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $is_insert = $db->query("INSERT INTO `data`(`first_name`, `last_name`, `email`, `subject`, `message`) VALUES ('$first_name', '$last_name', '$email', '$subject', '$message')");

    if($is_insert == True)
    {
        echo "<h2>Thanks, your request has been submitted</h2>";
        exit();
    }
}
?>

<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" type="text/css" href="css/contact_us.css">
   <script src="https://kit.fontawesome.com/f04df7e7cc.js" crossorigin="anonymous"></script>
   <title>www.sahilskitchen.com</title>
    </head>
     <body>
   <!-- contact section -->
         <section id="contact-section">
           <div class="container">
           	 <h2>Contact Us</h2>
              <p>Email us and keep upto date with our latest news</p>
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                 <i class="fa fa-map-marker"></i><span class="form-info"> Akshar Evvora, Dronagiri - Navi Mumbai</span><br>
                 <i class="fa fa-phone" > </i><span class="form-info"> +91 7506281455</span><br>
                 <i class="fa fa-envelope"></i><span class="form-info"> sahil.shaikh29jl00@hotmail.com</span>
               </div>
               
                   <!-- second grid -->
           <div>        
             <form action="" method="POST">
               <input type="text" name="first_name" placeholder="Your Name" required>
               <input type="text" name="last_name" placeholder="Last Name"><br>
               <input type="Email" name="email" placeholder="Email" required><br>
               <input type="text" name="subject" placeholder="Subject of this message"><br>
               <textarea name="message" name="mesage" placeholder="Message" rows="5" required></textarea><br>
               <button class="submit" >Send Message</button> 
             </form>   
               </div>
             </div>
           </div>
         </section>
         <br>
         <footer class="footer">
            <div class="social-media-links">
                <i class="fab fa-facebook fa-2x"></i>
                <i class="fab fa-instagram fa-2x"></i>
                <i class="fab fa-twitter fa-2x"></i>
            </div>
            <p><b>www.sahil'skitchen.com &copy; 2020, All Rights Reserved</b></p>
        </footer>
     </body>
 </html>