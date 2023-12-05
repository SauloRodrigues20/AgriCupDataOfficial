<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link rel="stylesheet" href="cadastros.css">
    <title>Escolha a Categoria de Produto</title>
    <script>
        function redirecionarParaCategoria(categoria) {
            switch (categoria) {
                case "Maquinario":
                    window.location = "Maquinario.php?categoria=Maquinario";
                    break;
                case "Semente":
                    window.location = "Semente.php?categoria=Semente";
                    break;
                case "Adubo":
                    window.location = "Adubo.php?categoria=Adubo";
                    break;
                case "Inseticida":
                    window.location = "Inseticida.php?categoria=Inseticida";
                    break;
                    case "Produtos Diversos":
                    window.location = "ProdutosDiversos.php?categoria=Produtos Diversos";
                    break;
                default:
                    alert("Categoria inválida");
            }
        }
        
    </script>
</head>
<body>
<div class="first">
 
 <nav>
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
     <br>
    <img class="logo" src="AgriCupData.logo.png" alt="">
    <h1>Escolha a Categoria de Produto</h1>
    <p>Selecione a categoria do produto que deseja registrar:</p>
    <button onclick="redirecionarParaCategoria('Maquinario')">Maquinario</button>
    <button onclick="redirecionarParaCategoria('Semente')">Semente</button>
    <button onclick="redirecionarParaCategoria('Adubo')">Adubo</button>
    <button onclick="redirecionarParaCategoria('Inseticida')">Inseticida</button>
    <button onclick="redirecionarParaCategoria('Produtos Diversos')">Produtos Diversos</button>
</div>
</body>
</html>