<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = new mysqli("localhost", "root", "", "Safras");

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
        $mensagem = "Safra cadastrado com sucesso!";
        echo "<script>alert('$mensagem'); window.location.href = 'Producao.php';</script>";
    } else {
        echo "Erro ao cadastrar Safra`: " . $conexao->error;}

    $conexao->close();
}
?>