<?php
require "validador.php";

$tipo = $_POST["tipo_user"] ?? "";

if ($tipo === "aluno") {

    $nome = $_POST["nome_aluno"];
    $email = $_POST["email_aluno"];
    $data = $_POST["data_nasc_aluno"];
    $senha = $_POST["senha_aluno"];

    $sql = "INSERT INTO aluno (nome, email, data_nascimento, senha) 
            VALUES ('$nome', '$email', '$data', '$senha')";

    if ($mysqli->query($sql)) {
        header("Location: homepage.php");
        exit;
    } else {
        echo $mysqli->error;
    }
}

elseif ($tipo === "professor") {

    $nome = $_POST["nome_prof"];
    $email = $_POST["email_prof"];
    $senha = $_POST["senha_prof"];
    $credencial = $_POST["credencial_prof"];

    $sql = "INSERT INTO professor (nome, email, senha, credencial) 
            VALUES ('$nome', '$email', '$senha', '$credencial')";

    if ($mysqli->query($sql)) {
        header("Location: alunos.php");
        exit;
    } else {
        echo $mysqli->error;
    }
}

else {
    echo "Erro.";
}
?>