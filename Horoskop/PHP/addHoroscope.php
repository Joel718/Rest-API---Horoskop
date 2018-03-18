<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'countHoroscope.php';

    $Error = $hokkuspokkus->echoSign();

    if($_POST["prsnnmr"] == null){
        echo "<p>Please enter your date of birth with 6 digits</p>";
    }  
    
    else if(isset($_SESSION["hokkuspokkus"]) == null){

        if ($Error != "<p>Something went wrong, please try again</p>"){

            $_SESSION["hokkuspokkus"] = $hokkuspokkus->echoSign();
            $true = true;
            echo "true";
        
        } 

    } else if($_SESSION["hokkuspokkus"] != null){

        echo "<p>Horoscope is already saved, please delete the existing one before renewal</p>";
    
    }
};
?>