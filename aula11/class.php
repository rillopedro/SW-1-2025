<?php
   class produto{
    private $Nome;
    private $Preco;
    private $Qtd;   

    public function __construct($Nome,$Preco=0,$Qtd=0){
        $this->Nome = $Nome;
        $this->Preco = $Preco;
        $this->Qtd = $Qtd;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function setNome($Nome){
        $this->Nome = $Nome;
    }
    public function getpreco(){
        return $this->Preco;
    }
    public function setpreco($valor){
        $this->Preco = $Valor;
    }
    public function adicionarestoque($Qtd){ 
        if($Qtd>0){
            $this->Qtd += $Qtd;
        }else{
            echo "Quantidade não pode ser 0";
        }
    }
    public function removerestoque($Qtd){ 
        if($Qtd<0){
            $this->Qtd -= $Qtd;
        }else{
            echo "Digite um valor válido pra quantidade";
        }
    }
    public function mostrardetalhes(){
        echo "Nome do Produto: ".$this->Nome = $Nome."<br>";
        echo "Preço: R$".number_format($this->Preco,2,",",".");
        echo "Quantidade em estoque".$this->Qtd = $Qtd."<br>";
    }
    }
?>