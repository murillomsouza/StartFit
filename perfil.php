<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil - StartFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="css/styles_perfil.css">
    
</head>
<body>
    <nav class="navbar navbar-dark bg-custom fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="homepage.php">
        <img src="img/logo.png" alt="Logo StartFit" />
      </a>
      <ul class="nav-links d-md-flex d-none me-auto">
        <li class="nav-itens">
          <a class="nav-link active" aria-current="page" href="homepage.php">Início</a>
        </li>
        <li class="nav-itens">
          <a class="nav-link" href="uppers.php">Superiores</a>
        </li>
        <li class="nav-itens">
          <a class="nav-link" href="lowers.php">Inferiores</a>
        </li>
        <li class="nav-itens">
          <a class="nav-link" href="backs.php">Costas</a>
        </li>
        <li class="nav-itens">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
      </ul>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end bg-custom text-white" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="homepage.php">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="uppers.php">Superiores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="lowers.php">Inferiores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="backs.php">Costas</a>
            </li>
            <li class="nav-itens">
                <a class="nav-link active" href="perfil.php">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color: #ff6b6b;">Sair</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

    <div class="perfil-container">

        <label class="foto-perfil" for="fotoInput">
            <img id="preview" src="camera.png" alt=" ">
        </label>
        <input type="file" id="fotoInput" name="foto" accept="image/*" hidden>

        <form action="salvar_perfil.php" method="POST" enctype="multipart/form-data">

            <div class="text-start mb-1">Nome completo</div>
            <input type="text" name="nome" class="form-control mb-3" required>

            <div class="text-start mb-1">E-mail</div>
            <input type="email" name="email" class="form-control mb-3" required>

            <div class="text-start mb-1">Telefone</div>
            <input type="text" id="telefone" name="telefone" class="form-control mb-3" required>

            <div class="text-start mb-1">CPF</div>
            <input type="text" id="cpf" name="cpf" class="form-control mb-3" required>

            <div class="text-start mb-1">Data de Nascimento</div>
            <input type="text" id="nasc" name="nascimento" class="form-control mb-3" required>

            <div class="row g-2">
                <div class="col-6">
                    <div class="text-start mb-1">Peso</div>
                    <input type="text" name="peso" class="form-control">
                </div>
                <div class="col-6">
                    <div class="text-start mb-1">Altura</div>
                    <input type="text" name="altura" class="form-control">
                </div>
            </div>

            <div class="btn-salvar-wrapper mt-4">
                <button type="submit" class="btn-salvar">Salvar</button>
            </div>
        </form>
    </div>

    <script>

    $('#fotoInput').on('change', function() {
        const file = this.files[0];
        if (file) {
            $('#preview').attr('src', URL.createObjectURL(file));
        }
    });

    $('#telefone').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00');
    $('#nasc').mask('00/00/0000');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>