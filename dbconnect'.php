<?php
    define("HOSTNAME","localhost");
    define("USERNAME","root");
    define("PASSWORD","");
    define("DATABASE","ims");

    $dbconnect = @mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$dbconnect){
        die("NO Connection!!!");
    }
?>