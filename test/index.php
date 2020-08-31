<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css">
 <script src="tools.js" defer></script> 
 <?php require 'check.php'; ?>
</head>
<body onload="loadPageListener()">

<h3>Contact Form</h3>

<p><?= $emailError ?></p>


        <form name ="contactForm" action="check.php" method="POST" id="contactForm">
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
            <button id="submit" type="submit" name="submit">Submit</button>
        </form>








      <div class = postcard-wrapper><?php letterArray(); ?></div>
</body>
</html>