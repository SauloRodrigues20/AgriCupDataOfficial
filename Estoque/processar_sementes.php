<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexao = new mysqli("localhost", "root", "", "Cadrastro");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $embalagem = $_POST["embalagem"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO sementes (nome, tipo, marca, embalagem, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$embalagem', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        $mensagem = "Semente cadastrada com sucesso!";

        echo "<script>alert('$mensagem'); window.location.href = 'Estoque.php';</script>";
    } else {
        echo "Erro ao cadastrar Semente: " . $conexao->error;}

    $conexao->close();
}
?>
