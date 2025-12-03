<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartFit - Cadastro</title>
    <link rel="stylesheet" href="css/styles_cadastro_user.css">
    <link rel="icon" href="img/icon.png" type="image/png" />
</head>
<body>

<div class="container">

    <div class="right">
        <img src="img/foto_login.png">
    </div>

    <div class="left">
     <form class="form-box" action="cadastro_action.php" method="post">

    <img src="img/logo.png" class="logo">

    <label>Tipo de Cadastro</label>
    <select id="tipo_user" name="tipo_user" class="input" onchange="alterarFormulario()" required>
        <option value="">Selecione</option>
        <option value="aluno">Aluno</option>
        <option value="professor">Professor</option>
    </select>

    <div id="campos_aluno" class="escondido">
        <label>Nome Completo</label>
        <input type="text" name="nome_aluno" placeholder="Digite seu nome">

        <label>E-mail</label>
        <input type="email" name="email_aluno" placeholder="email@example.com">

        <label>Data de Nascimento</label>
        <input type="date" name="data_nasc_aluno">

        <label>Senha</label>
        <input type="password" name="senha_aluno" placeholder="Insira sua senha">
    </div>

    <div id="campos_prof" class="escondido">
        <label>Nome Completo</label>
        <input type="text" name="nome_prof" placeholder="Digite seu nome">

        <label>E-mail</label>
        <input type="email" name="email_prof" placeholder="email@example.com">

        <label>Senha</label>
        <input type="password" name="senha_prof" placeholder="Insira sua senha">

        <label>Credencial</label>
        <input type="text" name="credencial_prof" placeholder="Digite sua credencial">
    </div>

    <button id="botao_cadastro" class="btn" type="submit">Cadastrar</button>

    <br>
    <p class="register">
        Já tem uma conta?
        <a href="login.php">Clique aqui para se conectar!</a>
    </p>

</form>

    </div>

</div>
    <script src="js/script_cadastro.js"></script>
</body>
</html>