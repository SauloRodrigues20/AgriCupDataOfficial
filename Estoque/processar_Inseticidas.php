<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = new mysqli("localhost", "root", "", "Cadrastro");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $quantidade = $_POST["quantidade"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO inseticidas (nome, tipo, marca, quantidade, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$quantidade', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        $mensagem = "Inseticida cadastrado com sucesso!";
        // Adiciona um script JavaScript para exibir um alerta no navegador
        echo "<script>alert('$mensagem'); window.location.href = 'Estoque.php';</script>";
    } else {
        echo "Erro ao cadastrar Inseticida: " . $conexao->error;}

    $conexao->close();
}
?>