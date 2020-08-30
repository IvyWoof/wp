<!DOCTYPE html>
<html lang='en'>
	<head>
	  <meta charset="utf-8">
    <meta name="description" content="World War 1 letters that describes the places a soldier visited during ww1 deployement from Australia.">
    <meta name="keywords" content="ww1, world war 1, postcards, soldier, war, letters, australian soldier, australia, army, map, tour, deployement">
    <meta name="author" content="Alanna Hembrow">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>Assignment 2</title>
	    
	  <!-- Keep wireframe.css for debugging, add your css to style.css -->
	  <link id='stylecss' type="text/css" rel="stylesheet" href="../a2/css/places-stylesheet.css">
    <?php require '../a3/tools.php';?>
	</head>
	<body>
	  <?php topModule(); ?> 
	  <main>
		  <section id="main-container">
		  	<article class="main-content">
		  		<h1>Places of Interest</h1>
		  		<div class="main-info">
			  		<span>Places mentioned by Douglas Raymond Baker have been featured on the map. Some places have changed significantly and are now cemetary sites or residential areas. There are a few places where the spelling was not accurate but process of deducation allowed accurate guesses to be made. Any places which originally contained spelling errors have been listed in their description.</span></br></br>
			  		<span>You can use the map by clicking on the icons, each colour represents a different continent and if a place has been mentioned in letters, the date has been listed so you can find the letter easily.</span>
		  		</div>
		  	</article>
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1JwmSCxDPtiwZo6ANP4QNIN6wCmktvnSg">
				</iframe>
			</section>
		</main>
    <footer>
      <?php endModule(); ?>
    </footer>
	</body>
</html>
