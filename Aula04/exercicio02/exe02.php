<?php
    
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];
    
    if ($a > $b && $c){
        echo "O número $a é o maior";
    }
    if ($b > $a && $c){
        echo "O número $b é o maior";
        break;
    }
    if ($c > $b && $c){
        echo "O número $c é o maior";
    }


?>