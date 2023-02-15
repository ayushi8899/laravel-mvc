<?php
    spl_autoload_register(function($classname) {
        $file = $classname.'.php';
        if(file_exists($file)) {
            echo "$file included\n";
            include $file;
        }
        else {
            throw new exception("unable to load $classname.");
        }
    });    
    try {
        $obj= new test1();
        $obj= new test2();
    } catch (exception $e) {
        echoq $e->getmessage(), "/n";
    }
    ?>

    

