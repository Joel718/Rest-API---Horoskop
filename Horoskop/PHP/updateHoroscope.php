<?php

parse_str(file_get_contents("php://input"), $_PUT);

session_start();

if(isset($_SERVER["REQUEST_METHOD"]) == "PUT"){

    if(isset($_SESSION["hokkuspokkus"]) == null){
        
        echo "<p>There is no horoscope saved</p>";

        } else {

            $_POST["prsnnmr"] = $_PUT["prsnnmr"];
            
            include 'countHoroscope.php';
            
            $Error = $hokkuspokkus->echoSign();
            
            if($Error){
                
                $_SESSION["hokkuspokkus"] = $hokkuspokkus->echoSign();
                $true = true;
                echo $true;
            
            } else {

            echo $Error;
            session_destroy();
        
        }
    }  
};

?>