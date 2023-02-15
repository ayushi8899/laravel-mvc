<?php
class fruit {
    public $name;
    public $color;

    function __construct($name) {
    $this->name = $name;

}
function __destruct() {
    echo "This fruit is {$this->name}.";

}
}

$appple = new fruit("Apple");
?>

