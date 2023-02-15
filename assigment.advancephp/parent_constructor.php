<?php
   class grandpa{
    public function __construct() {
        echo "I am a girl"."";
    }
   }
   class papa extends grandpa{
       public function __construct() {
         parent::__construct();
         echo "I am not a girl";
       }
    }
    $obj = new papa();
    ?>
