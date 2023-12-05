<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="cadastros.css">
<title>Cadastro de Maquinario</title>
</head>
<body>
    
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
        $mensagem = "Inseticida cadastrado com sucesso!";

        echo "<script>alert('$mensagem'); window.location.href = 'Estoque.php';</script>";
    } else {
        echo "Erro ao cadastrar Inseticida: " . $conexao->error;}

    $conexao->close();
}
?>

<nav class="first">
        <ul class="navbar">
        <li>
            <a href="index.php">Início </a></li>
         |
            <li><a href="Maquinario.php">Maquinário</a></li>
            <li><a href="Semente.php">Semente</a></li>
            <li><a href="Adubo.php">Adubo</a></li>
            <li><a href="Inseticida.php">Inseticida</a></li>
            <li><a href="ProdutosDiversos.php">Produtos Diversos</a></li>
            |
            <li><a href="../Login/login.php">Sair</a></li>
            
        </ul>
</nav>
    <img class="logo" src="AgriCupData.logo.png" alt="">
    <h1>Cadastro de Maquinário Agrícola</h1>
    <form method="post" action="processar_maquinario.php" enctype="multipart/form-data">
        <label for="nome">Nome da Máquina:</label>
        <input type="text" name="nome" required><br>

        <label for="tipo">Tipo de Máquina:</label>
        <input type="text" name="tipo" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name= "marca" required><br>

        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" required><br>

        <label for="ano">Ano de Fabricação:</label>
        <input type="text" name="ano" required><br>

        <label for="potencia">Potência (CV):</label>
        <input type="text" name="potencia" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="imagem">Imagem da Máquina:</label>
        <input type="file" name="imagem" accept="image/*"><br>

        <input type="submit" value="Cadastrar Maquinário">
    </form><br><br>
 </div>
</body>
</html>