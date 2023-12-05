<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha - AgriCup Data</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="body">
<div>
    <img src="AgriCup_Logo.svg" alt="">
    <div class="login-container">
         <form @submit.prevent="recoverPassword">
            <input type="text" placeholder="Usuário" v-model="credentials.username" required>
            <button type="submit" class="login-button">Recuperar Senha</button>
        </form>
        <a class="recuperado" href="login.php">Já recuperou a senha?</a>
    </div>
</div>
</body>
</html>
