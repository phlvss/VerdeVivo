<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../assets/img/logo 1.svg" type="image/x-icon">
</head>
<body>
    <div class="wrapper">

        <form action="testeLogin.php" method="POST">
            <h1>Login</h1>
            
            <div class="input-box">
                <input type="text" name="email" id="email" placeholder="E-mail ou Usuário">
                <i class='bx bxs-user' ></i>
            </div>
            
            <div class="input-box">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Lembrar senha</label>
                <a href="#">Esqueceu a senha?</a>
            </div>

            <input type="submit" name="submit" class="btn-Login" value="Entrar">

            <div class="registro">
                <p>Não possui uma conta? 
                <a href="registro.html">Registre-se</a></p>
            </div>

            <div class="voltar">
                <p>Deseja voltar a tela inicial? 
                <a href="index.html">Retornar</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>