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
?>

