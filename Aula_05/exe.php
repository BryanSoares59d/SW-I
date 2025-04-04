<?php
    $nome1 = $_POST['nome1'];
    $nome2 = $_POST['nome2'];
    $email = $_POST ['cxemail'];
    $senha = $_POST ['cxsenha'];
    $nomecompleto = $nome1 ." ". $nome2;

    if($email == 'soaresbryan313@gmail.com' and $senha == '12345'){
        $name = $_POST ['nome1'];
        header("Location: privada.php?user_name=".$nomecompleto);
    }else{
        header('Location: pagina_erro.php');
    }

?>