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
  	   	<li><a href="">Letters</a>
  	   		<ul class="subMenu">
		   			<li><a href="#">1914</a></li>
  	    		<li><a href="#">1915</a></li>
  	    		<li><a href="#">1916</a></li>
  		  		<li><a href="#">1917</a></li>
  		  		<li><a href="#">1918</a></li>
  	    	</ul>
        </li>
		   	<li><a href="/wp/a2/pages/battles.html">Battles</a></li>
  		  <li><a href="/wp/a2/pages/places.html">Places</a></li>
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
        </article>
      </section>
    </main>
    <footer>
      <div class="links">
      	<div class="links-item">
          <h3><a href="sitemap">Sitemap</a></h3>
        </div>
      	<div class="links-item">
          <h3><a href="/wp/a2/pages/contact.html">Contact us</a></h3>
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
