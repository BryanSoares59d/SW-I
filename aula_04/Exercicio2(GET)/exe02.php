<?php 
  $n1 = $_GET ['n1'];
  $n2 = $_GET ['n2'];
  $n3 = $_GET ['n3'];

  if($n1>$n2 and $n1>$n3){
    echo "O maior número é: $n1";
  }else if($n2>$n3 and $n2>$n1){
    echo "O maior número é: $n2";
  }else{
    echo "O maior número é: $n3";
  }
?>