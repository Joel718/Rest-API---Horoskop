<?php
session_start();

$showErr = "Nothing saved, please enter your date of birth";

if($_SERVER["REQUEST_METHOD"] == "GET"){
    if($_SESSION == !null){
        echo ($_SESSION["hokkuspokkus"]);
    } else {
       echo $showErr;
    }
};
?>