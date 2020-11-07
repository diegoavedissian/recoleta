<?php
require("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro Coleta</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

    <?php
    require_once("menu.html");
    ?>

    <div class="container">
    <main>
      <form method="POST" action="">
        <h2>Dados Cadastrais</h2>
        Razão Social:
        <input type="text" id="razaosocial" name="razaosocial" required placeholder="Digite a Razão Social" maxlength="50" autofocus><br><br>

        CNPJ:
        <input type="text" id="cnpj" name="cnpj" required placeholder="00.000.000/0000-00" maxlength="14" autofocus><br><br>

        E-mail
         <input type="email" id="email" name="email" required placeholder="Informe seu e-mail" maxlength="50" autofocus><br><br>

        Telefone
        <input type="tel" id="telefone" name="telefone" required placeholder="(11)98765-4321" maxlength="11" autofocus><br><br>

        CEP
        <input type="text" id="cep" name="cep" required placeholder="00000-000" maxlength="8" autofocus><br><br>

        Endereço
        <input type="text" name="endereco" required placeholder="Rua, nº" maxlength="30" autofocus><br><br>

        Senha
        <input type="password" name="senha" required placeholder="Senha de 8 digitos" maxlength="8" autofocus><br><br>

        <button type="submit" name="incluir"><a href="home.php" class="cadastro">Concluir cadastro</a></button>
        <button type="submit" name="cancelar"><a href="home.php" class="cadastro">Cancelar</a></button>

        <?php
         if (isset($_POST['razaosocial']) && isset($_POST['cnpj']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['cep']) && isset($_POST['endereco']) && isset($_POST['senha'])) {

            $razaosocial = $_POST['razaosocial'];
            $cnpj = $_POST['cnpj'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $cep = $_POST['cep'];
            $endereco = $_POST['endereco'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO coletor (razaosocial, cnpj, email, telefone, cep, endereco, senha) VALUES ('$razaosocial', '$cnpj', '$email', '$telefone', '$cep', '$endereco', '$senha')";

            $result = $conn->query($sql);

            if ($result) {
               echo "Dados inseridos com sucesso ";
            } else {
               echo "Dados não inseridos na tabela!! ";
            }
         }
         ?>

      </form>

    </div>

</body>

</html>