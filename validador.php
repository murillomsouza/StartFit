<?php

$usuario = 'root';
$senha = '';
$database = 'usuarios';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->connect_error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}