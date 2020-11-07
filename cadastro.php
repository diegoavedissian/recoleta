<?php
require("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cadastro Usuário</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>

   <?php
   require_once("menu.html");
   ?>

   <br>

   <div class="container">
      <h1>Dados Cadastrais</h1>
      <form method="POST" action="">
         Nome
         <input type="text" id="nome" name="nome" required placeholder="Nome completo" maxlength="50" autofocus><br><br>

         E-mail
         <input type="email" id="email" name="email" required placeholder="Informe seu e-mail" maxlength="50" autofocus><br><br>

         Telefone
         <input type="tel" id="telefone" name="telefone" required placeholder="(11)98765-4321" maxlength="12" autofocus><br><br>

         CEP
         <input type="text" id="cep" name="cep" required placeholder="XXXXX-XXX" maxlength="9" autofocus><br><br>

         Endereço
         <input type="text" name="endereco" required placeholder="Rua, nº" maxlength="30" autofocus><br><br>

         Senha
         <input type="password" name="senha" required placeholder="Senha de 8 digitos" maxlength="8" autofocus><br><br>

         <button type="submit" name="incluir"><a href="home.php" class="cadastro">Concluir cadastro</a></button>
         <button type="submit" name="cancelar"><a href="home.php" class="cadastro">Cancelar</a></button>

         <?php
         if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['cep']) && isset($_POST['endereco']) && isset($_POST['senha'])) {

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $cep = $_POST['cep'];
            $endereco = $_POST['endereco'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO usuario (nome, email, telefone, cep, endereco, senha) VALUES ('$nome', '$email', '$telefone', '$cep', '$endereco', '$senha')";

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