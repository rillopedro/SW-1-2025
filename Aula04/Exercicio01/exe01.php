<?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    
    $media = ($n1+$n2+$n3)/3;

    if  ($n1 && $n2 && $n3 > 10){
     echo "Isto não é uma nota válida";
    }
    else{
     echo "Esta é sua média: $media";
    }

?>

