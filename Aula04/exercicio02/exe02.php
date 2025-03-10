<?php
    
    $user = $_GET['user'];
    $a = $_GET["a"];
    $b = $_GET["b"];
    $c = $_GET["c"];

    $maior = 0;

    if ($a > $b && $a > $c){
        $maior = $a;
    }elseif ($b > $a && $b > $c){
        $maior = $b;
    }elseif($c > $a && $c > $b){
        $maior  = $c;
    }else{

    }
    echo "O maior número é: $maior"
?>