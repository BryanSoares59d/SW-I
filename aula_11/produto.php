<?php
   include_once "Produto.class.php";

   $produto = new Produto("Fone Bluetooth", 49.90, 100);
   $produto->adicionarEstoque(50);
   $produto->removerEstoque(30);
   $produto->mostrarDetalhes();

?>