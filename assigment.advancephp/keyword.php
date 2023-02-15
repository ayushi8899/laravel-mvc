<?php
class simple{
     
    public $l = 9;

    public function display(){
        return $this->l;
    }
}
$obj = new simple();
echo $obj->display();

?>
