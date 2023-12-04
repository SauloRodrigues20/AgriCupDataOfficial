<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="producao.css">
<title>Cadastro de Safras</title>
</head>
<body>
    
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
        $mensagem = "Safra cadastrado com sucesso!";
        
        echo "<script>alert('$mensagem'); window.location.href = 'Produção.php';</script>";
    } else {
        echo "Erro ao cadastrar Produto`: " . $conexao->error;}

    $conexao->close();
}
?>

<nav class="first">
        <ul class="navbar">
        <li>
            <a href="../Estoque/index.php">Início </a></li>
         |
            
            <li><a href="../Login/login.php">Sair</a></li>
            
        </ul>
</nav>
    <img class="logo" src="AgriCupData.logo.png" alt="">
    <h1>Cadastro de safra</h1>
    <form method="post" action="processar_safras.php" enctype="multipart/form-data">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="area">Talhões:</label>
        <input type="text" name="area" required><br>

        <label for="qualidade">Qualidade(0 a 10):</label>
        <input type="text" name="qualidade" required><br>

        <label for="peso">Peso(Kg):</label>
        <input type="number" name= "peso" required><br>

        <label for="plantio">Data de plantio:</label>
        <input type="date" name="plantio" required><br>

        <label for="colheita">Data de colheita:</label>
        <input type="date" name="colheita" required><br>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" required></textarea><br>

        <input type="submit" value="Cadastrar Plantio">
    </form><br><br>
 </div>
</body>
</html>