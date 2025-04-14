<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Exercício 3</title>
     <style>
        table {
            width: 60%;
            border: solid black;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: solid black;
            padding: 10px;
            text-align: center;
        }

        th {
             background-color: grey;
            color: white;
        }
    </style>
 </head>
<body>

         <?php
            $produtos = [
            ["nome" => "Celular", "preco" => 1500, "categoria" => "Eletrônicos"],
            ["nome" => "Camiseta", "preco" => 50, "categoria" => "Roupas"],
            ["nome" => "Arroz 5kg", "preco" => 25, "categoria" => "Alimentos"],
            ["nome" => "Notebook", "preco" => 3200, "categoria" => "Eletrônicos"],
            ["nome" => "Livro de PHP", "preco" => 80, "categoria" => "Livros"],
            ["nome" => "Calça Jeans", "preco" => 120, "categoria" => "Roupas"]
            ];
        ?>

        <table>
            <tr>
             <th>Nome</th>
             <th>Preço (R$)</th>
             <th>Categoria</th>
            </tr>

        <?php foreach ($produtos as $produto): ?>
            <tr class="<?= $produto['categoria'] ?>">
             <td><?= $produto['nome'] ?></td>
             <td><?= number_format($produto['preco'], 2, ',', '.') ?></td>
             <td><?= $produto['categoria'] ?></td>
            </tr>
        <?php endforeach; ?>
        </table>

</body>
</html>