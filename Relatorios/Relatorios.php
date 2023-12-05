<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cadrastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT nome, tipo, marca, embalagem, descricao FROM adubos";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastros.css">
    <title>Dados</title>
</head>
<body>
<nav class="first">
        <ul class="navbar">
        <li>
            <a href="../Estoque/index.php">Início </a></li>
            |
            <li><a href="../Login/login.php">Sair</a></li>
            
        </ul>
</nav>
<img class="logo" src="AgriCupData.logo.png" alt=""> <br>
<h1>Relatórios</h1> <br>
<div class="table">
<h2>Adubos</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='4'>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Embalagem</th>
                    <th>Descrição</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["tipo"]. "</td>
                    <td>" . $row["marca"]. "</td>
                    <td>" . $row["embalagem"]. "</td>
                    <td>" . $row["descricao"]. "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
    ?>
</div>
<!--Começo da outra Maquinario-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cadrastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT nome, tipo, marca, modelo, ano, potencia,descricao FROM maquinarios";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadrastro.css">
    <title>Dados</title>
</head>
<body>
<div class="table">
<h2>Maquinario</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Ano</th>
                    <th>Potencia</th>
                    <th>Descrição</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["tipo"]. "</td>
                    <td>" . $row["marca"]. "</td>
                    <td>" . $row["modelo"]. "</td>
                    <td>" . $row["ano"]. "</td>
                    <td>" . $row["potencia"]. "</td>
                    <td>" . $row["descricao"]. "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
    ?>
</div>
<!--Começo da outra Produtos Diversos-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cadrastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT nome, tipo, marca, peso, descricao, imagem FROM outros";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadrastro.css">
    <title>Dados</title>
</head>
<body>
<div class="table">
<h2>Produtos Diversos</h2>
    <?php
    if ($result->num_rows > 0) {
        echo "<table border='2'>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Peso</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["tipo"]. "</td>
                    <td>" . $row["marca"]. "</td>
                    <td>" . $row["peso"]. "</td>
                    <td>" . $row["descricao"]. "</td>
                    <td>" . $row["imagem"]. "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
 ?>
 </div>
 <!--Começo da outra inseticida-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cadrastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT nome, tipo, marca, quantidade, descricao, imagem FROM inseticidas";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadrastro.css">
    <title>Dados</title>
</head>
<body>
    
<div class="table">
<h2>Inseticidas</h2>

    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Quatidade</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["tipo"]. "</td>
                    <td>" . $row["marca"]. "</td>
                    <td>" . $row["quantidade"]. "</td>
                    <td>" . $row["descricao"]. "</td>
                    <td>" . $row["imagem"]. "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
 ?>
</div>

  <!--Começo da outra semente-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cadrastro";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT nome, tipo, marca, embalagem, descricao, imagem FROM sementes";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadrastro.css">
    <title>Dados</title>
</head>
<body>
<div class="table">
<h2>Sementes</h2>

<?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Nome</th>
                    <th>Tipo</th>
                    <th>Marca</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["tipo"]. "</td>
                    <td>" . $row["marca"]. "</td>
                    <td>" . $row["quantidade"]. "</td>
                    <td>" . $row["descricao"]. "</td>
                    <td>" . $row["imagem"]. "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado.";
    }

    $conn->close();
 ?>
</div>
<br><br>    
</body>
</html>