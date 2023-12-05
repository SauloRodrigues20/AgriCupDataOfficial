<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AgriCup Data</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="body">
<div>
    <img src="AgriCup_Logo.svg" alt="">
    <div class="login-container">
         <form @submit.prevent="login">
            <input type="text" placeholder="Usuário" id="login" v-model="credentials.username" required>
            <input type="password" placeholder="Senha" id="senha" v-model="credentials.password" required>
        <button type="submit" onclick="logar(); return false" class="login-button">Login</button>
      </form> <br>
      <div>
      <a class="esqueci" href="esqueci.php">Esqueci a Senha</a>
      <a class="cadastro" href="cadastro.php">Fazer Cadastro</a>
      </div>
    </div>
</div>
    <script>
        function logar() {
            
            var login = document.getElementById('login').value;
            var senha = document.getElementById('senha').value;

            if (login == "admin" && senha == "admin"){
                alert('Sucesso')
                location.href = "../Estoque/index.php";
            }else{
                alert("Usuário ou senha incorretos")
            }


        }
    </script>
</body>

</html>