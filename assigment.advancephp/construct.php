<?php
class fruit {
    public $name;
    public $color;

    function __construct($name) {
        $this->name = $name;
    }
    function get_name() {
        return $this->name;
    }
}
   $apple = new fruit("watermelon");
   echo $apple->get_name();
   ?>