<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <style>
         table,tr,td,th{
            border: 1px solid black;
            border-radius: 3px;
        }
        .par{
         background-color: red;
        }
        .impar{
            background-color: bisque;
        }

    </style>
</head>
<body>

    <table>
    <tr>
       <th>ITEM 1</th>
       <th>ITEM 2</th>
       <th>ITEM 3</th>
       <th>ITEM 4</th>
    </tr>
        <?php 
           for ($i=1; $i <= 8 ; $i++) { 
             echo"<tr>
                   <td class='impar'>Linha $i Coluna 1</td>
                   <td class='par'>Linha $i Coluna 2</td>
                   <td class='impar'>Linha $i Coluna 3</td>
                   <td class='par'>Linha $i Coluna 4</td>
                  </tr>";
           }
        ?>
    </table>
</body>
</html>