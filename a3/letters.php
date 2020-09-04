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
    <link id='stylecss' type="text/css" rel="stylesheet" href="../a3/css/letters-stylesheet.css">
    <?php require 'tools.php';?>
  </head>
  <body>
    <?php topModule(); ?>
    <main>
      <h1>Letters Home</h1>
      <div class = postcard-wrapper> <?php letterArray(); ?> </div>
    </main>
    <footer>
      <?php endModule(); ?>
    </footer>
  </body>
</html>
