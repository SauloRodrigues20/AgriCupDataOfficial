<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = new mysqli("localhost", "root", "", "Cadrastro");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $ano = $_POST["ano"];
    $potencia = $_POST["potencia"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO maquinarios (nome, tipo, marca, modelo, ano, potencia, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$modelo', '$ano', '$potencia', '$descricao', '$caminho_imagem')";
    if ($conexao->query($sql) === TRUE) {
        $mensagem = "Maquina cadastrada com sucesso!";
        // Adiciona um script JavaScript para exibir um alerta no navegador
        echo "<script>alert('$mensagem'); window.location.href = 'Estoque.php';</script>";
    } else {
        echo "Erro ao cadastrar Maquina: " . $conexao->error;}

    $conexao->close();
}
?>