<?php
include_once "class.php";

$produto1 = new produto("Água",6.00,50);

$produto1->adicionarestoque(1);
$produto1->removerestoque(5);
$produto1->mostrardetalhes();





?>