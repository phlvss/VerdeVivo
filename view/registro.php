<?php  
    if(isset($_POST['submit'])){

        include_once('config.php');

        $usuario = $_POST['usuario']; 
        $email = $_POST['email']; 
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO cadastro(usuario, senha, email) 
        VALUES('$usuario', '$senha', '$email')");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/css/registro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../assets/img/logo 1.svg" type="image/x-icon">
</head>
<body>
    <div class="wrapper">
        <form action="registro.php" method="POST">
            <h1>Registre-se</h1>
            <div class="input-box">
                <input type="text" name="usuario" id="usuario" placeholder="Usuário">
                <i class='bx bxs-user' ></i>
            </div>

            <div class="input-box">
                <input type="text" name="email" id="email" placeholder="E-mail">
                <i class='bx bxs-envelope' ></i>
            </div>

            <div class="input-box">
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <button type="submit"  name="submit" id="submit" class="btn-Login">Registrar</button>

            <div class="registro">
                <p>Já possui uma conta? 
                <a href="login.html"> Entrar</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>