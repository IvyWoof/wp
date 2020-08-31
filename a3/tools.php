<?php
function letterArray() {

$file = fopen("http://titan.csit.rmit.edu.au/~e54061/wp/letters-home.txt", "r");
flock($file, LOCK_SH);

if ($values = fgetcsv($file, 0, "\t")) {

    $headings = $values;
}

while ($values = fgetcsv($file, 0, "\t")) {

    if (count($headings) == count($values)) {

        $correspondence[] = array_combine($headings, $values);
    }

}

flock($file, LOCK_UN);
fclose($file);


?>
    <html>
        <body>
            <?php 
            foreach($correspondence as $array){ 
            ?>
                <div class="postcard">
                    <div class="postcard-inner">
                        <div class="postcard-front">
                            <h3 class="postcard-date"> 
                                <?php
                                echo $array['DateStart'];
                                ?>
                            </h3>
                        </div>
                    <div class="postcard-back">
                        <p class="postcard-content">
                            <?php
                            foreach($array as $key=>$value){
                            echo nl2br("$value<br />");
                            }?>
                        </p>
                    </div>
                </div>
            </div> 
        </body>
    </html>
<?php
}
}


function topModule() { ?>

<header>
    <img src="/media/poppy.png" alt="Red Poppy">
    <h1><a href="index.php">Life as an ANZAC</a></h1>
</header>
<nav>
    <ul class="flexNav">
        <li><a href="../a2/index.php">Home</a></li>
        <li><a href="../a2/introduction.php">Introduction</a></li>
        <li><a href="../a2/letters.php">Letters</a></li>
        <li><a href="../a2/battles.php">Battles</a></li>
        <li><a href="../a2/places.php">Places</a></li>
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
<?php
}

function endModule() { ?>
      <div class="links">
        <div class="links-item">
          <h3><a href="sitemap">Sitemap</a></h3>
        </div>
        <div class="links-item">
          <h3><a href="../a2/contact.php">Contact us</a></h3>
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
<?php
}
?>

<?php
function validateForm() {

$email = "";
$contactName = "";
$mobile = "";
$subject = "";
$filtersubject = "";
$message = "";
$filtermessage = "";
$errorsFound = false;
$namePattern = '/^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*/i';
$mobilePattern = '/^04(\s?[0-9]{2}\s?)([0-9]{3}\s?[0-9]{3}|[0-9]{2}\s?[0-9]{2}\s?[0-9]{2})$/i';
$resultMsg = "";



 if (!empty($_POST)) {

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $emailError = '<span class="errorMsg" style="color:red">Invalid email</span>';
        $errorsFound = true;

    }

    else {

        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    } 


    if (!preg_match($namePattern, $_POST['contactName'])) {
    
        $contactName = $_POST['contactName'];
        $nameError = 'span class="errorMsg" style="color:red">Unrecognised characters</span>';
        $errorsFound = true;
    
    }

    else {

        $contactName = $_POST['contactName'];

    }

    if (!preg_match($mobilePattern, $_POST['mobile'])) {
        
        $mobile = $_POST['mobile'];
        $mobileError = '<span class="errorMsg" style="color:red">Incorrect number</span>';
        $errorsFound = true;

    }

    else {

      $mobile = $_POST['mobile'];

    }


    if (!$errorsFound) {
        $filtersubject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
        $filtermessage = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
        $message = htmlspecialchars($filtermessage, ENT_QUOTES, "UTF-8");
        $subject = htmlspecialchars($filtersubject, ENT_QUOTES, "UTF-8");

        $records = array (
            array("$contactName", "$email", "$mobile", "$subject", "$message" ));
            
        $file = fopen("C:\MAMP\htdocs\wp\a3\mail.txt","a");
        flock($file, LOCK_EX);
        foreach ($records as $record) {
        fputcsv($file, $record," \t ");
        flock($file, LOCK_UN);
        fclose($fp);
        }

        $resultMsg = '<span class="form-result" style = "color: green">Form successfully sent! Thanks for contributing.</span>';
   
        $contactName = "";
        $email = "";
        $mobile = "";
        $_POST['subject'] = "";
        $_POST['message'] = "";
    } 

    else {
        $subject = $_POST['subject'];
        $resultMsg = '<span class="form-result" style = "color: red">Form failed to send!</span>';
      
    }
      
}

?>
        <form name ="contactForm" method="POST" id="contactForm">
            <?= $resultMsg ?>
            <label for="contactName" class="name">Name</label>
            <input id="contactName" type="text" value ="<?= $contactName ?>" name="contactName" placeholder="Your name.." required><?php echo $nameError ?>
            <label for="email">Email</label>
            <input id="email" type="text" value ="<?= $email ?>" name="email" placeholder="Your email.." required><?php echo $emailError ?>
            <label for="mobile" class="mobile">Mobile</label>
            <input id="mobile" type="tel" value ="<?= $mobile ?>" name="mobile" placeholder="Your mobile number.." ><?php echo $mobileError ?>
            <label for="subject">Subject</label>
            <input id="subject" type="text" value ="<?= $_POST['subject'] ?>" name="subject" placeholder="Message subject.." required>
            <label for="message">Message</label>
            <textarea name="message" id="message" cols="30" rows="7" placeholder="Enter your message here.." required><?= $_POST['message'] ?></textarea>
            <div class="rememberMe">
            <label for="rememberMe">Remember me</label>
            <input type="checkbox" value="rememberMe" id="rememberMeBox">
            </div>
            <button id="submit-form" type="submit" name="submit">Submit</button>
        </form>
<?php
}
?>
