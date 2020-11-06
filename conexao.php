<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "bd_projeto";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão não deu ruim! " . mysqli_connect_error());
}

?>
