<?php

class Conta{
    public $Nome;
    public $Cpf;
    private $Saldo;
    
    public function Sacar($valor){
        if ($this->Saldo < $valor){
            return "Saldo insuficiente";
        }else{
            $this->Saldo = $this->Saldo - $valor;
            $txt = "Saque realizado com sucesso! Seu saldo atual é de R$: ".$this->Saldo;
            return $txt;
        }
    }

    public function Depositar($valor){
        $this->Saldo += $valor;
        $txt = "Depósito realizado com sucesso! Seu saldo atual é de R$: ".$this->Saldo;
        return $txt;
    }

    public function Mostrar_Saldo(){
        echo "Nome: ".$this->Nome."<br>";
        echo "Cpf: ".$this->Cpf."<br>";
        echo "Saldo atual: R$ ".$this->Saldo."<br>";
        echo "<hr>";
    }
}






?>