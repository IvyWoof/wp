<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letters Home</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="../a2/css/contact-stylesheet.css">
    <script src="../a3/tools.js" defer></script>
    <?php require '../a3/tools.php';?>
  </head>
    <?php topModule(); ?>
    <main id="form" class="parallax">
      <section class="contact-form">
        <form name ="contactForm" method="POST" id="contactForm">
            <label for="contactName" class="name">Name</label>
            <input id="contactName" type="text" value ="<?php echo $_SESSION['badName']; ?>" name="contactName" placeholder="Your name.." required>
            <label for="email">Email</label>
            <input id="email" type="text" value="<?php echo $_SESSION['cleanEmail']; ?>" name="email" placeholder="Your email.." required>
            <label for="mobile" class="mobile">Mobile</label>
            <input id="mobile" type="tel" name="mobile" placeholder="Your mobile number.." >
            <label for="subject">Subject</label>
            <input id="subject" type="text" name="subject" placeholder="Message subject.." required>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="7" placeholder="Enter your message here.." required></textarea>
            <div class="rememberMe">
            <label for="rememberMe">Remember me</label>
            <input type="checkbox" value="rememberMe" id="rememberMeBox">
            </div>
            <button id="submit-form" type="submit" name="submit">Submit</button>
        </form>
      </section>
      <section class ="contact-info">
        <h1>Contact Us</h1>
        <span>If you have any discussions, comments or information on the content throughout the website feel free to contact me. 
        </span></br></br></br></br></br>
        <span>Pictures, information and websites relating to any of the topics, places or times mentioned would be greatly appreciated!</span>
      </section>
    </main>
    <footer>
      <?php endModule(); ?>
    </footer>
  </body>
</html>