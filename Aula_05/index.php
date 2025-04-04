<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>initial Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body">
<h1>Página inicial - Projeto PHP</h1>
<div class = "container">

    <form action="exe.php" method="POST">
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div data-mdb-input-init class="form-outline">
            <input type="text" id="idnome1" class="form-control"  name="nome1" required/>
            <label class="form-label" for="form3Example1">Primeiro nome</label>
        </div>
        </div>
        <div class="col">
        <div data-mdb-input-init class="form-outline">
            <input type="text" id="idnome2" class="form-control" name="nome2" required/>
            <label class="form-label" for="form3Example2">Segundo nome</label>
        </div>
        </div>
    </div>

    <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="email" id="idemail" class="form-control" name="cxemail" required/>
        <label class="form-label" for="form3Example3">Endereço de E-mail</label>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-4">
        <input type="password" id="idsenha" class="form-control" name = "cxsenha" required/>
        <label class="form-label" for="form3Example4">Senha</label>
    </div>

    <!-- Submit button -->
    <!-- <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign up</button> -->
    <input type="submit" class = "btn btn-primary btn-block mb-4" value="Entrar">
    </form>
</div>


<footer>&copy;Criado por Bryan Soares de Carvalho, 2°F Etec MCM</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>