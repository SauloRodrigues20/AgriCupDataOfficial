<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="cadastros.css">
    <title>Escolha a Categoria de Produto</title>
    <script>
        function redirecionarParaCategoria(categoria) {
            switch (categoria) {
                case "Estoque":
                    window.location = "Estoque.php?categoria=Estoque";
                    break;
                case "Producao":
                    window.location = "../Produçao/Producao.php?categoria=Producao";
                    break;
                case "Relatorios":
                    window.location = "../Relatorios/Relatorios.php?categoria=Relatorios";
                    break;
                case "Sobre Nós":
                    window.location = "Sobrenos.php?categoria=Sobrenos";
                    break;
                default:
                    alert("Categoria inválida");
            }
        }
        
    </script>
</head>
<body>
<div class="first">
 
     </nav>
     <br>
    <img class="logo" src="AgriCupData.logo.png" alt="">
    <h1>Seja Bem-Vindo</h1>
    <p>Inicie os trabalhos escolhendo a pagina desejada:</p>
    <!-- Adicionei um select com as opções de categoria -->
    <select id="categoria" onchange="redirecionarParaCategoria(this.value)">
        <option value="">Selecione sua pagina</option>
        <option value="Estoque">Estoque</option>
        <option value="Producao">Produção</option>
        <option value="Relatorios">Relatorios</option>
        <option value="Sobre Nós">Sobre Nós</option>
        
    </select>
</div>
</body>
</html>
