<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'countHoroscope.php';

    $Error = $hokkuspokkus->echoSign();
    $non = $hokkuspokkus->echoSign();

    if($_POST["prsnnmr"] < 6 || null){
        echo "<p>Please enter your date of birth with 6 digits</p>";
    }  
    
    else if(isset($_SESSION["hokkuspokkus"]) == null){

        if ($non != "<p>Wrong number</p>"){

            $_SESSION["hokkuspokkus"] = $hokkuspokkus->echoSign();
            $true = true;
            echo "true";
        
        } else {
           echo $Error;
        } 

    } else if($_SESSION["hokkuspokkus"] != null){

        echo "<p>Horoscope is already saved, please delete the existing one before renewal</p>";
    
    }
};
?>