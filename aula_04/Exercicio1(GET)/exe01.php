<?php 
  $nome = $_GET ['cxnome'];
  $n1 = $_GET ['n1'];
  $n2 = $_GET ['n2'];
  $n3 = $_GET ['n3'];
  $soma = $n1 + $n2 + $n3;
  $media = $soma / 3;
  echo "A média do aluno $nome, é $media";
?>