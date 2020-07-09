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
      		<h1 class="">ANZAC Douglas Raymond Baker</h1>
      		<img src="../../media/D.R.Baker.jpg" alt="D.R. Baker F.Co">
    </header>

    <nav>
  		<ul id="navigation">
		    <li><a href="#">Home</a></li>
		   	<li><a href="#">Introduction</a></li>
		   	<li><a href="#">Letters & Post Cards</a></li>
		   		<ul>
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

    <main>
      <article id='Website Under Construction'>
      </article>
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
