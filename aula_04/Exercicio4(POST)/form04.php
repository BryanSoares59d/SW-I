<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário 04</title>
</head>
<body>
    <h1>Preencha o formulário</h1>
    <form action="exe04.php" method="post">
        <p>Digite seu nome: <input type="text" name="cxnome" required></p>
        <p>Digite seu E-mail: <input type="email" name="cxemail" required></p>
        <p>Escolha a bandeira do seu cartão:
            <select name="cxband" required>
                <option value="MasterCard">MasterCard</option>
                <option value="Visa">Visa</option>
                <option value="HiperCard">HiperCard</option>
                <option value="Elo">Elo</option>
                <option value="American Express">American Express</option>
            </select>
        </p>
        <input type="submit">
    </form>
</body>
</html>