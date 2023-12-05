<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - AgriCup Data</title>
    <link rel="stylesheet" href="login.css">

</head>
<body class="body">
<div>
    <img src="AgriCup_Logo.svg" alt="">
    <div class="login-container">
         <form @submit.prevent="register">
            <input type="text" placeholder="Usuário" v-model="credentials.username" required>
            <input type="password" placeholder="Senha" v-model="credentials.password" required>
            <select class="select" v-model="credentials.permissionLevel" required>
                <option disabled value="">Selecione o nível de permissão</option>
                <option>Administrador</option>
                <option>Usuário</option>
            </select>
            <button type="submit" class="login-button">Cadastrar</button>
        </form>
      <a class="cadastrado" href="login.php">Já tenho Cadastro</a>
    </div>
</div>
</body>
</html>
