<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="absolute.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700|Open+Sans:400,700, 700italic' rel='stylesheet' type='text/css'>
    <title>Palmer Computers</title>
</head>
<body>
<div id="container">
    <header>
       <div id="logo">
          <h1>Palmer Computers</h1>
          <h3>Serving the North Carolina Triad Area</h3>
       </div>
        <nav>
            <a href="#" alt="Visit our store!">Store</a>
            <div class="right">
            <a href="#"><img src="rss.jpg" alt="Subscribe to our RSS feed!"></a>
            <a href="#"><img src="facebook.jpg" alt="Visit us on facebook!"></a>
            <a href="#"><img src="twitter.jpg" alt="Visit us on twitter!"></a>
            </div>
        </nav>
    </header>
    <article id="feature">
        <img src="ampeddesign_LCD_Screen.png" alt="computer" class="comp"> 
        <p>Apple Computer Sales &amp; Repairs</p>
        <img src="Anonymous_mouse.png" alt="computer mouse" class="mouse">
    </article>
    <article id="content">
        <section id="services">
           <h3>Services</h3>
           <p>We offer a range of services, including but not limited to:</p>
           <ul>
               <li>Repair of Apple and Windows laptops and desktops</li>
               <li>Affordable replacement parts</li>
               <li>Discount used Apple products</li>
            <li>Technical help and instruction</li>
            <li>System updates and installations</li>
           </ul>
        </section>
        <section id="contact">
            <h3>Contact Me</h3>
            <p>Interested in our services? Use the form below to send us an e-mail.</p>
<?php 
$action=$_REQUEST['action']; 
if ($action=="")    /* display the contact form */ 
    { 
    ?> 
    <form  action="" method="POST" enctype="multipart/form-data"> 
    <input type="hidden" name="action" value="submit"> 
    Your name:<br> 
    <input name="name" type="text" value="" size="30"/><br> 
    Your email:<br> 
    <input name="email" type="text" value="" size="30"/><br> 
    Your message:<br> 
    <textarea name="message" rows="7" cols="30"></textarea><br> 
    <input type="submit" value="Send email"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message']; 
    if (($name=="")||($email=="")||($message=="")) 
        { 
        echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
        } 
    else{         
        $from="From: $name<$email>\r\nReturn-path: $email"; 
        $subject="Message sent using your contact form"; 
        mail("weirdele@gmail.com", $subject, $message, $from); 
        echo "Email sent!"; 
        } 
    }   
?> 
        </section>
    </article>
    <footer>
        <p>&COPY; 2014 Palmer Computers</p>
    </footer>
</div>
</body>
</html>