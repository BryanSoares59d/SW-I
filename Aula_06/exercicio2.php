<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <style>
        table, td, tr{
            border: 2px solid black;
            border-radius: 4px;
        }
        body{
            font-size: 16px;
        }
    </style>
</head>
<body>
   <form method="post">
      <label for="linhas">Número de Linhas:</label>
      <input type="number" name="linhas" id="linhas" required>
      <br><br>
      <label for="colunas">Número de Colunas:</label>
      <input type="number" name="colunas" id="colunas" required>
      <br><br>
      <input type="submit" value="Gerar Tabela">
   </form>
<br>
   
    <table>
    <tr>
      <th>SUA TABELA</th>
    </tr>
      <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];
    
           $i = 1;
           while ($i <= $linhas) {
              echo "<tr>";
              $j = 1;
             while ($j <= $colunas) {
               echo "<td>Linha$i Coluna$j</td>";
               $j++;
            }
           echo "</tr>";
           $i++;
           }
        }
      ?>
    </table>
</body>
</html>