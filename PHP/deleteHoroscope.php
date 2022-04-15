<?php
session_start();


$errorMsg = "There is nothing to delete";
$success = "Horoscope deleted";

if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    
    if(isset($_SESSION["hokkuspokkus"]) == null){
        echo $errorMsg;
    } else{
        session_destroy();
        echo $success;
    }
};
?>