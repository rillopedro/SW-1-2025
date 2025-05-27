<?php
class Produto {
    private $Nome;
    private $Preco;
    private $Qtd;

    public function __construct($Nome, $Preco = 0, $Qtd = 0) {
        $this->Nome = $Nome;
        $this->Preco = $Preco;
        $this->Qtd = $Qtd;
    }

    public function getNome() {
        return $this->Nome;
    }

    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function getPreco() {
        return $this->Preco;
    }

    public function setPreco($Preco) {
        $this->Preco = $Preco;
    }

    public function adicionarEstoque($Qtd) { 
        if ($Qtd > 0) {
            $this->Qtd += $Qtd;
        } else {
            echo "Quantidade deve ser maior que 0";
        }
    }

    public function removerEstoque($Qtd) { 
        if ($Qtd > 0 && $Qtd <= $this->Qtd) {
            $this->Qtd -= $Qtd;
        } else {
            echo "Digite um valor válido para quantidade";
        }
    }

    public function mostrarDetalhes() {
        echo "Nome do Produto: " . $this->Nome . "<br>";
        echo "Preço: R$" . number_format($this->Preco, 2, ",", ".") . "<br>";
        echo "Quantidade em estoque: " . $this->Qtd . "<br>";
    }
}
?>