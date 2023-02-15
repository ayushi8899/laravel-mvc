<?php
trait message1 {
    public function msg1() {
        echo "oop is fun";

    }
}
class welcome {
    use message1;
}

$obj = new welcome();
$obj->msg1();

?>