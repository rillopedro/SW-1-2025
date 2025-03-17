<?php

    $nm = $_POST["nm"];
    $senha = $_POST["senha"];

        if($nm == 'aluno@gmail.com' && $senha == '1234'){

              $nm = "Aluno";
              header('Location: privada.php?nome='.$nm);
        }else{
             header('location: erro.php');
        }
?>