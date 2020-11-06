<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontos de Coleta</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

        <?php
        require_once("menu.html");
        ?>

        <div class="container">
        <br>
            <h2>Seja bem vindo!</h2><br>
            <h3>&#127793; Encontre no mapa o local de coleta mais proximo.</h3><br>

            <div class="row">
                <div class="row"><h3><strong>Selecione o tipo de resíduo que deseja descartar:</strong></h3></div>
                <div class="row" id="botoes">
                <button><img src="./img/lampada.png" width="100" alt=""><br>Lampadas</button>
                <button><img src="./img/bateria.png" width="100" alt=""><br>Pilhas e Baterias</button>
                <button><img src="./img/papel.png" width="100" alt=""><br>Papel</button>
                <button><img src="./img/oleo.png" width="100" alt=""><br>óleo</button>
                <button><img src="./img/sucataeletro.png" width="100" alt=""><br>Sucata Eletronica</button>
                <button><img src="./img/organico.png" width="100" alt=""><br>Organicos</button>
                </div>
            </div>
    

            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14640.789586913008!2d-46.71885149999999!3d-23.453343150000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1604602377281!5m2!1spt-BR!2sbr" width="800" height="400" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </div>
 
</body>
</html>