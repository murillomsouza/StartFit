<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartFit - Cadastro</title>
    <link rel="stylesheet" href="css/styles_cadastro_user.css">
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
                <select id="tipo_user" name="usuario" class="input">
                    <option value="aluno">Aluno</option>
                    <option value="professor">Professor</option>
                </select>
                <label>Nome Completo</label>
                <input type="text" placeholder="Digite seu nome">
            
                <label>E-mail</label>
                <input type="text" placeholder="seuemailaqui@gmail.com">

                <label>Senha</label>
                <input type="password" placeholder="Insira sua senha"><br>

                <button class="btn">Cadastrar</button>

                
            
            <p class="or">Ou faça login</p>

        </form>
    </div>

</div>

</body>
</html>
