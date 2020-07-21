<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
  </head>

  <body>
    <header>
      <img src="../../media/poppy.png" alt="Red Poppy">
      <h1><a href="index.php">Life as an ANZAC</a></h1>
      <!-- Insert search bar in future -->
    </header>
    <nav>
    	<ul class="flexNav">
  		  <li><a href="index.php">Home</a></li>
  		 	<li><a href="#introduction">Introduction</a></li>
  	   	<li><a href="/wp/a2/pages/letters.html">Letters</a>
  	   		<ul class="subMenu">
		   			<li><a href="#">1914</a></li>
  	    		<li><a href="#">1915</a></li>
  	    		<li><a href="#">1916</a></li>
  		  		<li><a href="#">1917</a></li>
  		  		<li><a href="#">1918</a></li>
  	    	</ul>
        </li>
		   	<li><a href="#">Battles</a></li>
  		  <li><a href="#">Places</a></li>
        <li><a href="#">Related</a></li>
    	</ul>
    </nav>
    <!-- 3 Column site content -->
    <main>
      <section class="select-container">
      <a href="/wp/a2/pages/letters.html">
        <div class="image-container">
          <div class="overlay">
            <h2>Letters and Postcards</h2>
            <p>Letters date from 1914 - 1918 and describe battles, training and the life of a soldier during World War 1.</p>
          </div>
          <img src="../../media/letters-home.jpg" alt="Soldier writing letter in battlefield">
        </div>
      </a>
      <a href="/wp/a2/pages/letters.html">
        <div class="image-container">
          <div class="overlay">
            <h2>Life on the Battlefield</h2>
            <p>Read through a collection of letters detailing the heroic time spent in Gallipoli and France and spending time on the battlefields.</p>
          </div>
          <img src="../../media/battles.png" alt="Image of WW2 jet fighters">
        </div>
      </a>
      <a href="/wp/a2/pages/letters.html">
        <div class="image-container">
          <div class="overlay">
            <h2>Places of Interest</h2>
            <p>Discover a map labeling places of interest for the letter writer and navigate letters depicting times spent in these locations.</p>
          </div>
          <img src="../../media/maps.png" alt="WW2 map of allies and enemies over Europe">
        </div>
      </a>
      </section>
      <!-- Information about site -->
      <section class="main-container parallax" id="introduction">
        <article class="main-content">
          <div class="main-text">
            <img src="../../media/D.R.Baker.jpg" alt="Douglas Raymond Baker">
            <h2>ANZAC</h2>
            <p>April 2015 marked the centenary of the ANZAC legend. As such, this site was created to help young, and old, to learn, discover and connect with people from that period of time. Inparticular, those who created the ANZAC legend. </p>
            <h3>What does ANZAC day represent?</h3>
            <p>The ANZAC legend is a national day of rememberance in Australia and New Zealand that commemorates those who "served and died in all wars, conflicts and peacekeeping operations". ANZAC day occurs on the 25th of April every year and was originally started to honour those who served in the Gallipoli Campaign in the First World War.</p>
            <h3>Douglas Raymond Baker</h3>
            <p>The letters listed throughout this website were sent from Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home. In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions and experiences that he had while visiting relatives in England during leave.</p>
            <p>The letters start from the beginning of Douglas' basic training which occurred in August 1914 and ended in May 1918. Training took place in Brisbane, Australia.</p>
            <p>These letters are made avaliable so that others can learn and understand the life of an ANZAC and get a sense of what life on the battlefield was like.</p>
          </div>
      </section>
    </main>











    <footer>
      <div id="site-info">
      	<a href="">Sitemap</p>
      	<a href="">Contact us</p>
        <a href="https://github.com/s3683007/wp">GitHub</a>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Alanna Hembrow s3683007 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
            </div>
    </footer>

  </body>
</html>
