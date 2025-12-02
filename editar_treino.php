<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FICHA DE TREINO - STARTFIT</title>
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
        background: #1e1e1e;
        color: #fff;
      }
      main {
        flex: 1;
        padding-top: 80px;
      }
      .footer-custom {
        margin-top: auto;
      }
      .ficha-titulo {
        font-size: 2rem;
        font-weight: bold;
        margin: 30px 0 40px 0;
        font-family: "Palanquin Dark", sans-serif;
      }
      .exercicio-card {
        width: 100%;
        height: 280px;
        border-radius: 16px;
        display: flex;
        align-items: flex-end;
        justify-content: flex-end;
        padding: 16px;
        position: relative;
        cursor: pointer;
        transition: transform 0.3s ease;
        font-weight: bold;
        font-size: 1.1rem;
        text-align: center;
      }
      .exercicio-card:hover {
        transform: scale(1.05);
      }
      .exercicio-card-purple {
        background: linear-gradient(135deg, #9333ea, #6b21a8);
      }
      .exercicio-card-cyan {
        background: linear-gradient(135deg, #06b6d4, #0891b2);
      }
      .exercicio-card-magenta {
        background: linear-gradient(135deg, #ec4899, #be185d);
      }
      .exercicio-card-orange {
        background: linear-gradient(135deg, #f59e0b, #d97706);
      }
      .exercicio-card-add {
        background: transparent;
        border: 3px dashed #666;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
      }
      .exercicio-card-add:hover {
        border-color: #999;
      }
      .exercicio-card-add i {
        font-size: 2.5rem;
        color: #666;
      }
      .exercicio-card-add span {
        color: #999;
        font-size: 0.9rem;
      }
      .exercicios-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 24px;
        margin-bottom: 40px;
      }
    </style>
</head>
<body>
    <!----------Barra Navegação Principal---------->
    <nav class="navbar navbar-dark bg-custom fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="homepage.html">
          <img src="img/logo.png" alt="Logo StartFit"/>
        </a>
        <ul class="nav-links d-md-flex d-none me-auto">
          <li class="nav-itens">
            <a class="nav-link" href="homepage.html">Início</a>
          </li>
          <li class="nav-itens">
            <a class="nav-link" href="uppers.html">Superiores</a>
          </li>
          <li class="nav-itens">
            <a class="nav-link" href="lowers.html">Inferiores</a>
          </li>
          <li class="nav-itens">
            <a class="nav-link" href="backs.html">Costas</a>
          </li>
          <li class="nav-itens">
            <a class="nav-link" href="alunos.php">Alunos</a>
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
                <a class="nav-link" href="homepage.html">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="uppers.html">Superiores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lowers.html">Inferiores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="backs.html">Costas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="alunos.php">Alunos</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!----------Conteúdo Principal---------->
    <main>
      <div class="container">
        <h1 class="ficha-titulo">FICHA DE TREINO - <span id="aluno-nome">Aluno</span></h1>
        
        <div class="exercicios-container">
          <!-- Card 1 - Exercício Purple -->
          <div class="exercicio-card exercicio-card-purple" onclick="selecionarExercicio(this)">
            <i class="bi bi-dash-circle"></i>
          </div>

          <!-- Card 2 - Exercício Cyan -->
          <div class="exercicio-card exercicio-card-cyan" onclick="selecionarExercicio(this)">
            <i class="bi bi-dash-circle"></i>
          </div>

          <!-- Card 3 - Exercício Magenta -->
          <div class="exercicio-card exercicio-card-magenta" onclick="selecionarExercicio(this)">
            <i class="bi bi-dash-circle"></i>
          </div>

          <!-- Card 4 - Exercício Orange -->
          <div class="exercicio-card exercicio-card-orange" onclick="selecionarExercicio(this)">
            <i class="bi bi-dash-circle"></i>
          </div>

          <!-- Card 5 - Adicionar Exercício -->
          <div class="exercicio-card exercicio-card-add" onclick="adicionarExercicio()">
            <i class="bi bi-plus"></i>
            <span>Adicionar<br>exercício</span>
          </div>
        </div>
      </div>
    </main>

    <!----------Footer---------->
    <footer class="footer-custom mt-0 pt-0 pb-0">
      <div class="container py-3">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
            <a href="homepage.html"><img src="img/logo.png" alt="StartFit Logo" style="height: 48px;"></a>
          </div>
          <div class="col-12 col-md-6 text-center text-md-end">
            <a href="https://github.com/murillomsouza/StartFit" target="_blank" class="footer-social mx-2" aria-label="GitHub">
              <i class="bi bi-github" style="font-size: 2.2rem;"></i>
            </a>
          </div>
        </div>
        <div class="footer-divider my-3"></div>
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

    <script>
      function obterAlunoNome() {
        const params = new URLSearchParams(window.location.search);
        return params.get('aluno') || 'Aluno';
      }

      document.getElementById('aluno-nome').textContent = obterAlunoNome();

      function selecionarExercicio(element) {
        alert('Exercício selecionado! (Implementar edição de exercício)');
      }

      function adicionarExercicio() {
        alert('Adicionar novo exercício (Modal ou redirecionamento)');
      }
    </script>
  </body>
</html>
