<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conexao = new mysqli("localhost", "root", "", "Cadrastro");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $peso = $_POST["peso"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO outros (nome, tipo, marca, peso, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$peso', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        $mensagem = "Produto cadastrado com sucesso!";
        // Adiciona um script JavaScript para exibir um alerta no navegador
        echo "<script>alert('$mensagem'); window.location.href = 'Estoque.php';</script>";
    } else {
        echo "Erro ao cadastrar Produto`: " . $conexao->error;}

    $conexao->close();
}
?>