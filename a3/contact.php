<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letters Home</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="../a3/css/contact-stylesheet.css">
    <script src="../a3/tools.js" defer></script>
    <?php require '../a3/tools.php';?>
  </head>
    <?php topModule(); ?>
    <main id="form" class="parallax">
      <section class="contact-form">
        <?php validateForm(); ?>
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