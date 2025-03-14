<?php 
   $login = $_POST ['cxlog'];
   $senha = $_POST ['cxsenha'];

   if($login == 'etec' and $senha == 'informatica'){
     echo "Logado com sucesso!";
   }else{
     echo "Login ou senha incorretos, tente novamente!";
   }
?>

<a href="form03.php">
    <button>Voltar</button>
</a>
