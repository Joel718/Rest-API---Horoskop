<?php

    class user {

        private $hokkuspokkus;

         function __construct($sign) {

            $this->sign = $sign;

            if(strlen($sign) < 4) {
            
                $this->hokkuspokkus = "<p>Wrong number</p>";
            
            } else if($sign >= '0120' && $sign <= '0218'){  
            
                $this->hokkuspokkus = "<p>Your horoscope is <b>♒︎ Vattumannen ♒</b></p>";
            
            } else if($sign >= '0219' && $sign <= '0320') {
              
                $this->hokkuspokkus = "<p>Your horoscope is <b>Fiskarna</b></p>";
                
            } else if($sign >= '0321' && $sign <= '0419') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Väduren</b></p>";
                  
              } else if($sign >= '0420' && $sign <= '0520') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Oxen</b></p>";
                  
              } else if($sign >= '0521' && $sign <= '0621') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Tvillingarna</b></p>";
                  
              } else if($sign >= '0622' && $sign <= '0722'){  
              
                $this->hokkuspokkus = "<p>Your horoscope is <b>♍︎ Kräftan ♍︎</b></p>";
            
            } else if($sign >= '0723' && $sign <= '0822') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Lejonet</b></p>";
                  
              } else if($sign >= '0823' && $sign <= '0922') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Jungfrun</b></p>";
                  
              } else if($sign >= '0923' && $sign <= '1022') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Vågen</b></p>";
                  
              } else if($sign >= '1023' && $sign <= '1121') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Skorpionen</b></p>";
                  
              } else if($sign >= '1122' && $sign <= '1221') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Skytten</b></p>";
                  
              } else if($sign >= '1222' && $sign <= '0119') {
                
                  $this->hokkuspokkus = "<p>Your horoscope is <b>Stenbocken</b></p>";
                  
              }

            else {
              
                $this->hokkuspokkus = "<p>Wrong number</p>";
            
            }
        }
        
        public function echoSign(){
            return $this->hokkuspokkus;
        }
        
    }
    $sign = substr($_POST["prsnnmr"], -4, 4);
    $hokkuspokkus = new user($sign);
?>