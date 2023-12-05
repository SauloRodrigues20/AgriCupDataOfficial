<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="cadastros.css">
<title>Cadastro de Adubos</title>
</head>
<body>
<script>
    $(document).ready(function () {
        $("#formulario").submit(function (e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "seu_script.php",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    // Exibe a mensagem sem recarregar a página
                    alert(response);
                },
                error: function (error) {
                    console.log(error);
                }
            });
        });
    });
</script>   
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conexao = new mysqli("localhost", "root", "senha", "Cadrastro");

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $marca = $_POST["marca"];
    $embalagem = $_POST["embalagem"];
    $descricao = $_POST["descricao"];

    $caminho_imagem = "caminho/do/seu/diretorio/" . basename($_FILES["imagem"]["name"]);
    move_uploaded_file($_FILES["imagem"]["tmp_name"], $caminho_imagem);

    $sql = "INSERT INTO adubos (nome, tipo, marca, embalagem, descricao, imagem) VALUES ('$nome', '$tipo', '$marca', '$embalagem', '$descricao', '$caminho_imagem')";

    if ($conexao->query($sql) === TRUE) {
        $mensagem = "Adubo cadastrado com sucesso!";
        // Adiciona um script JavaScript para exibir um alerta no navegador
        echo "<script>alert('$mensagem'); window.location.href = 'cadastro.php';</script>";
    } else {
        echo "Erro ao cadastrar adubo: " . $conexao->error;
    }

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
    <h1>Cadastro de Adubos</h1>
    <form method="post" action="processar_Adubos.php" enctype="multipart/form-data">
        <label for="nome">Nome do Adubo:</label>
        <input type="text" name="nome" required><br>

        <label for="tipo">Tipo de Adubo:</label>
        <input type="text" name="tipo" required><br>

        <label for="marca">Marca:</label>
        <input type="text" name="marca" required><br>

        <label for="embalagem">Embalagem (Kg/Litros):</label>
        <input type="text" name="embalagem" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <label for="imagem">Imagem do Adubo:</label>
        <input type="file" name="imagem" accept="image/*"><br>

        <input type="submit" value="Cadastrar Adubo">
    </form><br><br>
</body>
</html>