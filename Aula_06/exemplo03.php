<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03</title>
    <style>
        table,tr,td,th{
            border: 1px solid black;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
        </tr>
        <!-- AQUI COMEÇA O LAÇO DE REPETIÇÃO -->
        <?php 
          for ($i=1; $i <= 5 ; $i++) { 
            echo"<tr>
                   <td>Linha $i Coluna 1</td>
                   <td>Linha $i Coluna 2</td>
                   <td>Linha $i Coluna 3</td>
                </tr>
                ";
          }
        ?>
       <!-- AQUI TERMINA O LAÇO DE REPETIÇÃO -->



<!--        
        <tr>
            <td>Linha 1 Coluna 1</td>
            <td>Linha 1 Coluna 2</td>
            <td>Linha 1 Coluna 3</td>
        </tr>
        <tr>
            <td>Linha 2 Coluna 1</td>
            <td>Linha 2 Coluna 2</td>
            <td>Linha 2 Coluna 3</td>
        </tr>
        <tr>
            <td>Linha 3 Coluna 1</td>
            <td>Linha 3 Coluna 2</td>
            <td>Linha 3 Coluna 3</td>
        </tr> -->
 
    </table>
</body>
</html>