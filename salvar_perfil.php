<?php
$conn = new mysqli("localhost", "usuario", "senha", "startfit_db");
if ($conn->connect_error) { die("Erro: " . $conn->connect_error); }

// Upload
$foto_nome = null;
if (!empty($_FILES['foto']['name'])) {
    $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    $foto_nome = 'foto_' . time() . '.' . $ext;
    move_uploaded_file($_FILES['foto']['tmp_name'], 'uploads/' . $foto_nome);
}

$nome  = $_POST['nome'];
$email = $_POST['email'];
$tel   = $_POST['telefone'];
$cpf   = $_POST['cpf'];
$nasc  = $_POST['nascimento'];
$peso  = $_POST['peso'];
$alt   = $_POST['altura'];

$sql = "INSERT INTO usuarios (nome,email,telefone,cpf,nascimento,peso,altura,foto)
VALUES (?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $nome,$email,$tel,$cpf,$nasc,$peso,$alt,$foto_nome);
$stmt->execute();
$stmt->close();
$conn->close();

echo "<script>alert('Salvo com sucesso!'); window.location='perfil.php';</script>";

?>