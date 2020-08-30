<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="World War 1 letters that describe life and what war was like for a soldier.">
    <meta name="keywords" content="ww1, world war 1, postcards, soldier, war, letters, australian soldier, australia, army, 1914">
    <meta name="author" content="Alanna Hembrow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Letters Home</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='stylecss' type="text/css" rel="stylesheet" href="../../a2/css/letters-stylesheet.css">
    <?php require '../../a3/tools.php';?>
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
    <main>
      <h1>Letters Home</h1>
      <div class = postcard-wrapper> <?php letterArray(); ?> </div>
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
