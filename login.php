<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartFit - Login</title>
    <link rel="stylesheet" href="css/styles_login.css">
</head>
<body>

<div class="container">

    <div class="left">
        <img src="img/foto_login.png">
    </div>

    <div class="right">
        <form class="form-box" action="validador.php" method="post">

            <img src="img/logo.png" class="logo">

            
                <label>E-mail ou telefone</label>
                <input type="text" placeholder="seuemailaqui@gmail.com">

                <label>Senha</label>
                <input type="password" placeholder="Insira sua senha">

                <a class="forgot" href="#">Esqueceu a senha?</a>

                <button class="btn">Entrar</button>

            <p class="register">
                Ainda não tem uma conta?
                <a href="cadastrouser.php">Clique aqui para se cadastrar!</a>
            </p>

        </form>
    </div>

</div>

</body>
</html>
