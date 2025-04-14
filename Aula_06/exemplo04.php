<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>
    <?php 
      $usuario = 3;
      if($usuario == 3){
        echo"<ul>
              <li>item 1</li>
              <li>item 2</li>
              <li>item 3</li>
            </ul>";
      }else{
        echo"<p>parágrafo 1</p>
             <p>parágrafo 2</p>
             <p>parágrafo 3</p>";
      }
    ?>

    <!-- se usuário for diferente de 3, quero que apareça 3 parágrafos (p) -->
    <!-- se usuário for igual a 3, quero que apareça 3 itens (ul - li) -->
    
</body>
</html>