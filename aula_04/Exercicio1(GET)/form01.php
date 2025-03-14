<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 01</title>
</head>
<body>
    <h1>Preencha o formulário</h1>
    <form action="exe01.php" method="get">
      <p>Digite o nome do aluno: <input type="text" name="cxnome" required></p>
      <p>Digite a primeira nota do aluno: <input type="number" min="0" max="10" name="n1" required></p>
      <p>Digite a segunda nota do aluno: <input type="number" min="0" max="10" name="n2" required></p>
      <p>Digite a terceira nota do aluno: <input type="number" min="0" max="10" name="n3" required></p>
      <input type="submit">
    </form>
</body>
</html>