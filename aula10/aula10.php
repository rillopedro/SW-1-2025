<?php
    include_once 'conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "Pedro";
    $conta1->Cpf = "400.289.222-22";

    $conta1-> Mostrar_Saldo();

    echo $conta1-> Depositar(500);

    echo"<br>";

    $conta1-> Mostrar_Saldo();
    echo"<hr>";
    echo $conta1-> Sacar(500);
    
?>