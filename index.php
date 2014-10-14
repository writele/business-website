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
        <section id="services" class="left">
           <h3>Services</h3>
        </section>
        <section id="contact" class="right">
            <h3>Contact Me</h3>
            <p>I would love to hear from you! Use the form below to send me an e-mail.</p>
            <form action="#" method="post">
                <p><label for="name">Name:</label>
                <input type="text" name="name" required></p>
                <p><label for="email">E-mail:</label>
                <input type="text" name="email" required></p>
                <p><label for="phone">Phone (optional):</label>
                <input type="text" name="phone"></p>
               <p><label for="message">Message:</label></p>
                <textarea rows="10" cols="50" name="message" placeholder="Type your message here." required></textarea>
              <p><input type="submit"></p>
            </form>
            <?php
if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) { 
        echo '<p>Your message has been sent!</p>';
    } else { 
        echo '<p>Something went wrong, go back and try again!</p>'; 
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