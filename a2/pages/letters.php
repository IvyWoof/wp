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
    <?php topModule(); ?>
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
