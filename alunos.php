<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>STARTFIT</title>
    <meta name="Projeto StartFit" />
    <meta description="" />
    <meta
      keywords="Academia, Fitness, Treinos online, Como iniciar na academia, musculação, fisiculturismo"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="img/icon.png" type="image/png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      html, body {
        height: 100%;
      }
      body {
        display: flex;
        flex-direction: column;
      }
      .avaliacoes-section {
        flex: 1;
      }
      .footer-custom {
        margin-top: auto;
      }
      body.alunos-page .avaliacao-card {
        background-image: linear-gradient(135deg, #1e1e1e, #1e1e1e),
          linear-gradient(135deg, #c50000, #a800e1);
        background-clip: padding-box, border-box;
        border: 10px solid transparent;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.25);
      }
      body.alunos-page .card-title {
        color: #fff;
        font-weight: 700;
      }
      body.alunos-page .card-img-top {
        display: flex;
        justify-content: center;
        align-items: center;
      }
      body.alunos-page .card-img-top img.border-avatar {
        margin: 0 auto;
        display: block;
        max-width: 120px;
        width: 100%;
        height: auto;
      }
    </style>
  </head>
  <body class="alunos-page">
    <!----------Barra Navegação Principal---------->
    <nav class="navbar navbar-dark bg-custom fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="homepage.html">
          <img src="img/logo.png" alt="Logo StartFit"/>
        </a>
        <ul class="nav-links d-md-flex d-none me-auto">
          <li class="nav-itens">
            <a class="nav-link" aria-current="page" href="homepage.php">Início</a>
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
            <a class="nav-link active" href="alunos.php">Alunos</a>
          </li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-custom text-white" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="homepage.php">Início</a>
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
              <li class="nav-item">
                <a class="nav-link active" href="alunos.php">Alunos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" style="color: #ff6b6b;">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!----------Seção Alunos---------->
    <section class="avaliacoes-section mt-5 pt-5">
      <div class="container mt-4">
    <div class="row g-2 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-4">
      <!-- Card 1 -->
      <div class="col">
        <div class="card avaliacao-card text-center mx-auto">
          <div class="card-img-top d-flex justify-content-center mt-3">
            <img src="img/IconeBorda.png" alt="Avatar" class="border-avatar">
          </div>
          <div class="card-body">
            <h5 class="card-title">Gabriela C. Abacherli</h5>
              <a href="editar_treino.php?aluno=Gabriela C. Abacherli" class="btn bg-white text-dark rounded-pill fw-bold px-4 py-2"> Ver treino </a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col">
        <div class="card avaliacao-card text-center mx-auto">
          <div class="card-img-top d-flex justify-content-center mt-3">
            <img src="img/IconeBorda.png" alt="Avatar" class="border-avatar">
          </div>
          <div class="card-body">
            <h5 class="card-title">João V. S. Donazan</h5>
              <a href="editar_treino.php?aluno=João V. S. Donazan" class="btn bg-white text-dark rounded-pill fw-bold px-4 py-2"> Ver treino </a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col">
        <div class="card avaliacao-card text-center mx-auto">
          <div class="card-img-top d-flex justify-content-center mt-3">
            <img src="img/IconeBorda.png" alt="Avatar" class="border-avatar">
          </div>
          <div class="card-body">
            <h5 class="card-title">Gabriel Alves N.</h5>
              <a href="editar_treino.php?aluno=Gabriel Alves N." class="btn bg-white text-dark rounded-pill fw-bold px-4 py-2"> Ver treino </a>
          </div>
        </div>
      </div>
      <!-- Card 4 -->
       <div class="col">
        <div class="card avaliacao-card text-center mx-auto">
          <div class="card-img-top d-flex justify-content-center mt-3">
            <img src="img/IconeBorda.png" alt="Avatar" class="border-avatar">
          </div>
          <div class="card-body">
            <h5 class="card-title">Aline G. de Lima</h5>
              <a href="editar_treino.php?aluno=Aline G. de Lima" class="btn bg-white text-dark rounded-pill fw-bold px-4 py-2"> Ver treino </a>
          </div>
        </div>
      </div>
      
    </div>
  </div>
    </section>
    <!----------Footer---------->
    <footer class="footer-custom mt-0 pt-0 pb-0">
      <!-- Logo e redes sociais -->
      <div class="container py-3">
        <div class="row align-items-center">
          <!-- Logo -->
          <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
            <a href="homepage.html"><img src="img/logo.png" alt="StartFit Logo" style="height: 48px;"></a>
          </div>
          <!-- Redes sociais -->
          <div class="col-12 col-md-6 text-center text-md-end">
            <a href="https://github.com/murillomsouza/StartFit" target="_blank" class="footer-social mx-2" aria-label="GitHub">
              <i class="bi bi-github" style="font-size: 2.2rem;"></i>
            </a>
          </div>
        </div>
        <!-- Linha divisória -->
        <div class="footer-divider my-3"></div>
        <!-- Segunda linha: direitos e links -->
        <div class="row align-items-center">
          <div class="col-12 col-md-6 text-center text-md-start mb-2 mb-md-0">
            <div class="footer-text">
              © 2025 StartFit – Todos os direitos reservados
            </div>
          </div>
          <div class="col-12 col-md-6 text-center text-md-end">
            <a href="#" class="footer-link mx-2">Termos de Uso</a>
            <a href="#" class="footer-link mx-2">Políticas de Privacidade</a>
          </div>
        </div>
      </div>
    </footer>
    <!----------scripts bootstrap---------->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js"
      integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"
    ></script>
    <!----------scripts JavaScript---------->
    <script src="js/scripts.js"></script>
  </body>
</html>