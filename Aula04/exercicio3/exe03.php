<?php

    $log = $_POST['user'];
    $sen = $_POST['senha'];

    $logado = false;

    if ($log == 'etec' && $sen == 'informatica'){
        $logado =true;
        echo 'Logado com sucesso';
    }else{
        $logado = false;
        echo 'Nome ou senha invalido.';
    }



?>