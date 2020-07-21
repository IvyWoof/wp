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
        <h1>Life as an ANZAC</h1>
      <form action="" id="search-bar">
        <input type="text" placeholder="Search..">
      </form>
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

    <main>

      <section class="select-container">
          <div class="image-container">
            <div class="overlay">
              <h2>Letters and Postcards</h2>
              <p>testestesfi ensofnf sfnsfn dkjsfndkjs nfsdkfj nsd</p>
            </div>
            <img src="../../media/letters-home.jpg" alt="Soldier writing letter in battlefield">
          </div>
          <div class="image-container">
            <div class="overlay">
              <h2>Life on the Battlefield</h2>
              <p>fdsfkidnsfs dnf dosnfdosno fnsdf nsfnoinds fnoifs </p>
            </div>
          <img src="../../media/battles.png" alt="Image of WW2 jet fighters">
        </div>
          <div class="image-container">
            <div class="overlay">
              <h2>Places of Interest</h2>
              <p>fisjfdsfj dsjf dsjfds jfoidsjfoidsfoisfjdsfjoisfjsoif jds fjdsfjdfsjdsfjdfsj</p>
            </div>
          <img src="../../media/maps.png" alt="WW2 map of allies and enemies over Europe">
        </div>
      </section>

      <section class="main-container parallax" id="introduction">
        <article class="main-content">
          <div class="main-text">
          <h2>ANZAC</h2>
          <p>April 2015 marked the centenary of the ANZAC legend. As such, this site was created to help young, and old, to learn, discover and connect with people from that period of time. Inparticular, those who created the ANZAC legend. </p>
          <h3>What does ANZAC day represent?</h3>
          <p>The ANZAC legend is a national day of rememberance in Australia and New Zealand that commemorates those who "served and died in all wars, conflicts and peacekeeping operations". ANZAC day occurs on the 25th of April every year and was originally started to honour those who served in the Gallipoli Campaign in the First World War.</p>
          <h3>Douglas Raymond Baker</h3>
          <p>The letters listed throughout this website were sent from Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home. In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions and experiences that he had while visiting relatives in England during leave.</p>
          <p>The letters start from the beginning of Douglas' basic training which occurred in August 1914 and ended in May 1918. Training took place in Brisbane, Australia.</p>
          <p>These letters are made avaliable so that others can learn and understand the life of an ANZAC and get a sense of what life on the battlefield was like.</p>
          </div>
                    <!--<img src="../../media/D.R.Baker.jpg" alt="Douglas Raymond Baker">
        </article>
          <article class="main-content">
          <p>These are copies of letters written by my father Douglas Raymond Baker during the First World War (1914-1918) to his family in Gympie. I have three thick exercise books in which the letters were copied in hand writing by my Aunt Alice, his sister. I understand that this was done so his letters could be sent on to other members of the family. I don’t know if the originals are still in existence, probably not.</p>
          <p>In the early letters Alice has not included the name of the person they were written to but later she writes at the beginning, “Letter to Dot”,  “Letter to Mother”, etc. and later still copies the original, “Dear Al”, “Dear Mag”, etc..  Likewise the endings are often not laid out fully as we would do but Al may have done this or Dad may have been saving space on the page.</p>
          <p>Some letters are slightly out of date order in the books but as most of these are around the time his father died I have put them in the correct order as this is crucial to understanding the sense of the contents.  A lot will be missing – many, many ships were sunk but thanks to Aunt Alice we have these copies of the ones that did get through.</p>
          <p>Where Dad used brackets in a letter I have used [   ]  style and where I have made any comment or explanation I have used (   ) and Italics.</p>
          <p>Where he uses the word “gay” it is used in the true sense, bright, happy, carefree, etc., This is the original meaning of the word before it became associated with the homosexual community.</p>
          <p>The amounts of money are, of course, in Pounds, shillings and pence but as these are out of date and we have no pounds sign in the computer I have written them in, sometimes showing the decimal equivalents. One Pound equalled $2,  one shilling equalled 10 cents and one penny equalled a little under one cent. After a while I stopped putting the equivalents in as they had cno significance unless you knew the relative cost of things then and now. A shilling – equivalent to ten cents might actually alent to ten cents might actually buy  buy ten or twenty dollars worth of goods now.</p>
          <p>Some abbreviations and terms:-</p>
        </article>   -->
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
