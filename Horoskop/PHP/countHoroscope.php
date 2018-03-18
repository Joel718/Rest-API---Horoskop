<?php

    class user {

        private $hokkuspokkus;

         function __construct($sign) {

            $this->sign = $sign;

            if(strlen($sign) < 4) {
            
                $this->hokkuspokkus = "<p>Wrong number</p>";
            
            } else if($sign >= '0101' && $sign <= '0615'){  
            
                $this->hokkuspokkus = "<p>You are scorpion</p>";
            
            } else if($sign >= '0616' && $sign <= '1231'){  
              
                $this->hokkuspokkus = "<p>Your sign is jungfru</p>";
            
            } else {
              
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