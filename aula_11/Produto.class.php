<?php
       class Produto {
          private $Nome;
          private $Preco;
          private $Qntd;

        public function __construct($Nome, $Preco, $Qntd) {
          $this->Nome = $Nome;
          $this->Preco = $Preco;
          $this->Qntd = $Qntd;
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
        public function getQntd() {
          return $this->Qntd;
        }
        public function setQuantidade($Qntd) {
          $this->Qntd = $Qntd;
        }
        public function adicionarEstoque($qtd) {
          $this->Qntd += $qtd;
        }
        public function removerEstoque($qtd) {
          if ($qtd <= $this->Qntd) {
              $this->Qntd -= $qtd;
        }else{
            echo "Quantidade insuficiente em estoque.<br>";
        }
       }
        public function mostrarDetalhes() {
          echo "Nome: " . $this->Nome . "<br>";
          echo "Preço: R$" . number_format($this->Preco, 2, ',', '.') . "<br>";
          echo "Quantidade em estoque: " . $this->Qntd . "<br>";
     }
}