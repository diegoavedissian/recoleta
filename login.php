<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="../js/script.js"></script>
    <title>Login</title>
</head>

<body>
    <?php
    require_once("menu.html");
    ?>
    <div class="container">

        <div class="row">
            <div class="col-4 mx-auto mt-6 pt-4 container-login">
                <span class="mb-4 h3">Login</span>
                <form method="POST" action="">
                    <div class="form-group">
                        <label class="label-form" for="nome">Nome: </label>
                        <input class="form-control" type="text" name="nome" id="nome" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="email">E-mail: </label>
                        <input class="form-control" type="email" name="email" id="email" onkeyup="valida_campos()">
                    </div>
                    <div class="form-group">
                        <label class="label-form" for="senha">Senha: </label>
                        <input class="form-control" type="password" name="senha" id="senha" onkeyup="valida_campos()">
                    </div>
                    <div class="row">
                        <div class="col-1">
                            <button type="submit" name="cadastrar" class="btn btn-success mb-4" id="cadastrar-cliente"> Cadastrar </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
