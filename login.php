<?php
session_start();
include('validador.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $senha = isset($_POST['senha']) ? trim($_POST['senha']) : '';

    if(strlen($email) == 0) {
        $erro = "Preencha seu e-mail";
    } else if(strlen($senha) == 0) {
        $erro = "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($email);
        $senha = $mysqli->real_escape_string($senha);

        $sql_code = "SELECT * FROM users WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: homepage.php");
            exit();

        } else {
            $erro = "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartFit - Login</title>
    <link rel="stylesheet" href="css/styles_login.css">
    <link rel="icon" href="img/icon.png" type="image/png" />
</head>
<body>

<div class="container">

    <div class="left">
        <img src="img/foto_login.png">
    </div>

    <div class="right">
        <form class="form-box" action="" method="post">

            <img src="img/logo.png" class="logo">

            <?php if(isset($erro)): ?>
                <div style="color: #ff2b2b; margin-bottom: 15px; font-size: 14px;">
                    <?php echo htmlspecialchars($erro); ?>
                </div>
            <?php endif; ?>

            <label>E-mail</label>
            <input type="text" name="email" placeholder="seuemailaqui@gmail.com" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">

            <label>Senha</label>
            <input type="password" name="senha" placeholder="Insira sua senha">

            <a class="forgot" href="#">Esqueceu a senha?</a>

            <button type="submit" class="btn">Entrar</button>

            <br>

            <p class="register">
                Ainda não tem uma conta?
                <a href="cadastrouser.php">Clique aqui para se cadastrar!</a>
            </p>

        </form>
    </div>

</div>

</body>
</html>