<?php

// Declare an associative array
$arr = array( "a"=>"21", "b"=>"31", "c"=>"7", "d"=>"20" );

// Use shuffle function to randomly assign numeric
// key to all elements of array.
shuffle($arr);

// Display the first shuffle element of array
echo $arr[0];

?>
