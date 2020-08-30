<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letters Home</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="../../a2/css/contact-stylesheet.css">
    <script src="../../a3/tools.js"></script>
  </head>

  <body>
    <header>
      <img src="../../../media/poppy.png" alt="Red Poppy">
      <h1><a href="../index.php">Life as an ANZAC</a></h1>
    </header>
      <nav>
        <ul class="flexNav">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../../a2/pages/introduction.html">Introduction</a></li>
          <li><a href="#">Letters</a>
            <ul class="subMenu">
              <li><a href="../../a2/pages/1914.html">1914</a></li>
              <li><a href="../../a2/pages/1915.html">1915</a></li>
              <li><a href="../../a2/pages/1916.html">1916</a></li>
              <li><a href="../../a2/pages/1917.html">1917</a></li>
              <li><a href="../../a2/pages/1918.html">1918</a></li>
            </ul>
          </li>
          <li><a href="../../a2/pages/battles.html">Battles</a></li>
          <li><a href="../../a2/pages/places.html">Places</a></li>
          <li><a href="#">Related</a>
            <ul class="subMenu">
              <li><a href="https://www.aif.adfa.edu.au/showPerson?pid=11163" target="_blank">Summary of Service</a></li>
              <li><a href="https://recordsearch.naa.gov.au/SearchNRetrieve/Interface/ViewImage.aspx?B=3009496&S=1" target="_blank">Service Record</a></li>
              <li><a href="https://www.google.com.au/search?hl=en&site=imghp&tbm=isch&source=hp&biw=1920&bih=982&q=Omrah&oq=Omrah&gs_l=img.12...5422.5422.0.6592.1.1.0.0.0.0.212.212.2-1.1.0.msedr...0...1ac.1.62.img..1.0.0.xuc9Jh0uuzM" target="_blank">9th Battalion Brisbane</a></li>
              <li><a href="https://www.awm.gov.au/sites/default/files/images/collection/items/ACCNUM_LARGE/RCDIG1067548/RCDIG1067548--337-.JPG" target="_blank">Embarkation Roll</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    <main class="parallax">
      <section class="contact-form">
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
      </section>
      <section class ="contact-info">
        <h1>Contact Us</h1>
        <span>If you have any discussions, comments or information on the content throughout the website feel free to contact me. 
        </span></br></br></br></br></br>
        <span>Pictures, information and websites relating to any of the topics, places or times mentioned would be greatly appreciated!</span>
      </section>
    </main>
    <footer>
      <div class="links">
        <div class="links-item">
          <h3><a href="sitemap">Sitemap</a></h3>
        </div>
        <div class="links-item">
          <h3><a href="../../a2/pages/contact.html">Contact us</a></h3>
        </div>
        <div class="links-item">
          <h3><a href="https://github.com/s3683007/wp">GitHub</a></h3>
        </div>
      </div>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> 
      <h4>Alanna Hembrow s3683007 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</h3></div>
      <div>
        <button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button>
      </div>
    </footer>
  </body>
</html>