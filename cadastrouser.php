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
        <form class="form-box" action="validador.php" method="post">

            <img src="img/logo.png" class="logo">

                <label>Tipo de Cadastro</label>
                <select id="tipo_user" name="usuario" class="input" onchange="alterarFormulario()">
                    <option value="">Selecione</option>
                    <option value="aluno">Aluno</option>
                    <option value="professor">Professor</option>
                </select>
                    
                <div id="campos_aluno" class="escondido">
                    <label>Nome Completo</label>
                
                    <input type="text" placeholder="Digite seu nome">
                
                    <label>E-mail</label>
                    <input type="text" placeholder="seuemailaqui@gmail.com">

                    <label>Data de Nascimento</label>
                    <input type="date" placeholder="dd/mm/aaaa">

                    <label>Senha</label>
                    <input type="password" placeholder="Insira sua senha"><br>

                </div>

                <div id="campos_prof" class="escondido">
                    <label>Nome Completo</label>
                    <input type="text" placeholder="Digite seu nome">
                
                    <label>E-mail</label>
                    <input type="text" placeholder="seuemailaqui@gmail.com">

                    <label>Senha</label>
                    <input type="password" placeholder="Insira sua senha"><br>

                    <label>Credencial</label>
                    <input type="text" placeholder="Digite sua credencial">
                    
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
