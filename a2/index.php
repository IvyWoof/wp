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
        <h1>ANZAC Douglas Raymond Baker</h1>
        <!--<img src="../../media/D.R.Baker.jpg" alt="D.R. Baker F.Co">-->
      <nav>
    		<ul class="flexNav">
  		    <li><a href="#">Home</a></li>
  		   	<li><a href="#">Introduction</a></li>
  		   	<li><a href="#">Letters & Post Cards</a></li>
  		   		<ul class="subMenu">
  		   			<li><a href="#">1914</a></li>
  	    			<li><a href="#">1915</a></li>
  	    			<li><a href="#">1916</a></li>
  		    		<li><a href="#">1917</a></li>
  		    		<li><a href="#">1918</a></li>
  		    	</ul>
  		   	<li><a href="#">Descriptions of Battle Action</a></li>
  		   	<li><a href="#">Places</a></li>
  		   	<li><a href="#">Related Material</a></li>
    		</ul>
    	</nav>
    </header>

    <main>
      <section class="selectContainer">
        <img src="../../media/letters-home.jpg" class="selectImage"  alt="Soldier writing letter">
        <div class="selectOverlay">
          <div class="selectText">Letters and Postcards</div>
        </div>
        <img src="../../media/battles.png" class="selectImage"  alt="World War 2 Aircraft">
        <div class="selectOverlay">
          <div class="selectText">Battles</div>
        </div>
        <img src="../../media/maps.png" class="selectImage"  alt="Map of World War 2 countries, allies and enemies">
        <div class="selectOverlay">
          <div class="selectText">Locations and Places</div>
        </div>
      </section>
    </main>

    <footer>
      <div id="site-info">
      	<p>Sitemap</p>
      	<p>Contant: ibak6837@bigpond.net.au</p>
      </div>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Alanna Hembrow s3683007 <a href="https://github.com/s3683007/wp">GitHub</a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</html>
