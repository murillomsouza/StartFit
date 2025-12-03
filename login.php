<?php
include("validador.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sqlAluno = "SELECT * FROM aluno WHERE email = '$email' AND senha = '$senha'";
    $resultadoAluno = $mysqli->query($sqlAluno);

    if ($resultadoAluno->num_rows > 0) {
        header("Location: aluno.php");
        exit();
    }

    $sqlProf = "SELECT * FROM professor WHERE email = '$email' AND senha = '$senha'";
    $resultadoProf = $mysqli->query($sqlProf);

    if ($resultadoProf->num_rows > 0) {
        header("Location: professor.php");
        exit();
    }

    echo "Usuário ou senha incorretos!";
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