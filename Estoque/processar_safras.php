<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = new mysqli("localhost", "root", "", "Cadrastro");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $area = $_POST["area"];
    $qualidade = $_POST["qualidade"];
    $peso = $_POST["peso"];
    $plantio = $_POST["plantio"];
    $colheita = $_POST["colheita"];
    $descricao = $_POST["descricao"];


    $sql = "INSERT INTO safras (nome, area, qualidade, peso, plantio, colheita, descricao) VALUES ('$nome', '$area', '$qualidade', '$peso', '$plantio', '$colheita', '$descricao')";

    if ($conexao->query($sql) === TRUE) {
        echo "Produção cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar Produção " . $conexao->error;
    }

    $conexao->close();
}
?>