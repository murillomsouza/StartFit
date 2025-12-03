<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FICHA DE TREINO - STARTFIT</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous" />
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="img/icon.png" type="image/png" />

    <style>
      /* --- SEUS ESTILOS ORIGINAIS --- */
      html, body { height: 100%; }
      body {
        display: flex;
        flex-direction: column;
        background: #1e1e1e;
        color: #fff;
      }
      main { flex: 1; padding-top: 80px; }
      .footer-custom { margin-top: auto; }
      
      .ficha-titulo {
        font-size: 2rem;
        font-weight: bold;
        margin: 30px 0 40px 0;
        font-family: "Palanquin Dark", sans-serif;
      }
      
      .exercicios-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 24px;
        margin-bottom: 40px;
      }
      
      /* Card do Exercício na Grid */
      .card-exercicio-wrapper { position: relative; }
      .card-exercicio {
        width: 100%;
        height: 280px;
        border-radius: 16px;
        overflow: hidden;
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        padding: 16px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      }
      .card-exercicio:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.5);
      }
      .card-exercicio img {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        object-fit: cover;
        z-index: 0;
        opacity: 0.8;
      }
      .card-exercicio-titulo {
        position: absolute;
        bottom: 0; left: 0; right: 0;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.9), transparent);
        color: white;
        padding: 16px;
        font-weight: bold;
        font-size: 0.95rem;
        text-align: center;
        z-index: 2;
      }
      
      /* Botão de Remover (X) no Card */
      .card-exercicio-remove {
        position: absolute;
        top: 10px; right: 10px; z-index: 3;
      }
      .btn-remove {
        background-color: rgba(0, 0, 0, 0.6);
        border: none;
        color: white;
        font-size: 1.8rem;
        cursor: pointer;
        padding: 5px 12px;
        border-radius: 8px;
        transition: background-color 0.3s ease;
        line-height: 1;
      }
      .btn-remove:hover {
        background-color: rgba(200, 0, 0, 0.8);
      }

      /* Cores dos Cards */
      .card-inferior { background: linear-gradient(135deg, #9c27b0 0%, #6a1b9a 100%); }
      .card-costas { background: linear-gradient(135deg, #ff9800 0%, #f57c00 100%); }
      .card-superior { background: linear-gradient(135deg, #00bcd4 0%, #0097a7 100%); }
      .card-peito { background: linear-gradient(135deg, #e91e63 0%, #c2185b 100%); }
      .card-perna { background: linear-gradient(135deg, #ff5722 0%, #d84315 100%); }

      /* Card Adicionar */
      .card-exercicio-add {
        background: transparent;
        border: 3px dashed #666;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
      }
      .card-exercicio-add:hover {
        border-color: #999;
        transform: scale(1.05);
      }
      .card-exercicio-add i { font-size: 2.5rem; color: #666; }
      .card-exercicio-add span { color: #999; font-size: 0.9rem; }


      /* --- ESTILOS DO MODAL --- */
      .modal-custom .modal-content {
        border: none;
        border-radius: 25px;
        overflow: hidden;
        background-color: #fff; /* Fundo Branco */
        color: #333;
        box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      }
      .modal-custom .modal-body { padding: 0; }
      
      /* Coluna da Esquerda (Texto) */
      .modal-info-col {
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }
      .modal-ex-title {
        font-family: 'Palanquin Dark', sans-serif;
        font-weight: 800;
        font-size: 2rem;
        margin-bottom: 15px;
        line-height: 1.1;
        color: #111;
        text-transform: uppercase;
      }
      
      .modal-badges {
        display: flex;
        gap: 10px;
        margin-bottom: 25px;
        flex-wrap: wrap;
      }
      .badge-custom {
        padding: 8px 16px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
      }
      .badge-cyan { background-color: #64e6d6; color: #0f5148; } /* Cor Categoria */
      .badge-dark { background-color: #333; color: #fff; }       /* Cor Equipamento */

      .modal-label { font-weight: 800; margin-bottom: 8px; font-size: 1.1rem; }
      .modal-desc-text { font-size: 0.95rem; line-height: 1.6; color: #555; }

      /* Coluna da Direita (Imagem) */
      .modal-img-col {
        background-color: #e0e0e0;
        min-height: 350px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
      }
      .modal-img-col img {
        width: 100%; height: 100%;
        object-fit: cover;
        display: block;
      }

      /* Botão Fechar Customizado */
      .btn-close-custom {
        position: absolute;
        top: 20px; right: 20px;
        z-index: 10;
        background-color: rgba(255,255,255,0.8);
        border-radius: 50%;
        width: 40px; height: 40px;
        border: none;
        font-weight: bold;
        font-size: 1.2rem;
        display: flex; align-items: center; justify-content: center;
        cursor: pointer;
        transition: background 0.2s;
        color: #000;
      }
      .btn-close-custom:hover { background-color: #fff; }
    </style>
</head>
<body>

    <nav class="navbar navbar-dark bg-custom fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="homepage.html">
          <img src="img/logo.png" alt="Logo StartFit"/>
        </a>
        <ul class="nav-links d-md-flex d-none me-auto">
          <li class="nav-itens"><a class="nav-link" href="homepage.php">Início</a></li>
          <li class="nav-itens"><a class="nav-link" href="uppers.php">Superiores</a></li>
          <li class="nav-itens"><a class="nav-link" href="lowers.php">Inferiores</a></li>
          <li class="nav-itens"><a class="nav-link" href="backs.php">Costas</a></li>
          <li class="nav-itens"><a class="nav-link" href="alunos.php">Alunos</a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end bg-custom text-white" tabindex="-1" id="offcanvasDarkNavbar">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item"><a class="nav-link" href="homepage.php">Início</a></li>
              <li class="nav-item"><a class="nav-link" href="uppers.php">Superiores</a></li>
              <li class="nav-item"><a class="nav-link" href="lowers.php">Inferiores</a></li>
              <li class="nav-item"><a class="nav-link" href="backs.php">Costas</a></li>
              <li class="nav-item"><a class="nav-link" href="alunos.php">Alunos</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <div class="container">
        <h1 class="ficha-titulo">FICHA DE TREINO - <span id="aluno-nome">Aluno</span></h1>
        
        <div class="exercicios-container" id="exercicios-container">
          </div>
        
        <div style="margin-bottom: 40px;">
          <div class="card-exercicio card-exercicio-add" onclick="adicionarExercicio()" style="height: 280px;">
            <i class="bi bi-plus"></i>
            <span>Adicionar<br>exercício</span>
          </div>
        </div>

        <div class="modal fade modal-custom" id="exerciseModal" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              
              <div class="modal-body">
                <div class="row g-0">
                  
                  <div class="col-md-6 modal-info-col">
                    <h2 class="modal-ex-title" id="ex-name">NOME DO EXERCÍCIO</h2>
                    
                    <div class="modal-badges">
                      <span class="badge-custom badge-cyan">
                        <span id="ex-category">Categoria</span>
                      </span>
                      <span class="badge-custom badge-dark">
                        <span id="ex-equipment">Equipamento</span>
                      </span>
                    </div>

                    <div class="mt-2">
                      <div class="modal-label">Execução:</div>
                      <p class="modal-desc-text" id="ex-description">
                        Carregando descrição...
                      </p>
                    </div>
                  </div>

                  <div class="col-md-6 modal-img-col">
                    <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">✕</button>
                    <img id="ex-image" src="" alt="Imagem do exercício">
                  </div>

                </div>
              </div>
              
            </div>
          </div>
        </div>
        </div>
    </main>

    <footer class="footer-custom mt-0 pt-0 pb-0">
      <div class="container py-3">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 text-center text-md-start mb-3 mb-md-0">
            <a href="homepage.html"><img src="img/logo.png" alt="StartFit Logo" style="height: 48px;"></a>
          </div>
          <div class="col-12 col-md-6 text-center text-md-end">
            <a href="https://github.com/murillomsouza/StartFit" target="_blank" class="footer-social mx-2">
              <i class="bi bi-github" style="font-size: 2.2rem;"></i>
            </a>
          </div>
        </div>
        <div class="footer-divider my-3"></div>
        <div class="row align-items-center">
          <div class="col-12 col-md-6 text-center text-md-start">
            <div class="footer-text">© 2025 StartFit – Todos os direitos reservados</div>
          </div>
          <div class="col-12 col-md-6 text-center text-md-end">
            <a href="#" class="footer-link mx-2">Termos de Uso</a>
            <a href="#" class="footer-link mx-2">Políticas de Privacidade</a>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.min.js" integrity="sha384-RuyvpeZCxMJCqVUGFI0Do1mQrods/hhxYlcVfGPOfQtPJh0JCw12tUAZ/Mv10S7D" crossorigin="anonymous"></script>
    
    <script>
      let nomeAluno = '';
      const modalEl = document.getElementById('exerciseModal');
      const bsModal = new bootstrap.Modal(modalEl);
      let currentExerciseId = null;

      // Define a cor do card na grid baseado na categoria
      function getCategoriaClass(categoria) {
        const cat = (categoria || '').toLowerCase();
        if (cat.includes('inferior') || cat.includes('perna')) return 'card-inferior';
        if (cat.includes('costas')) return 'card-costas';
        if (cat.includes('superior') || cat.includes('braço')) return 'card-superior';
        if (cat.includes('peito')) return 'card-peito';
        return 'card-perna';
      }

      // Inicializa a página
      document.addEventListener('DOMContentLoaded', function(){
        const params = new URLSearchParams(window.location.search);
        nomeAluno = params.get('aluno') || 'Aluno';
        document.getElementById('aluno-nome').textContent = nomeAluno;
        carregarFicha();
      });

      // Carrega lista de exercícios
      async function carregarFicha() {
        try {
          const res = await fetch(`get_ficha.php?aluno=${encodeURIComponent(nomeAluno)}`);
          const data = await res.json();
          const container = document.getElementById('exercicios-container');
          container.innerHTML = '';

          if (data.sucesso && data.exercicios && data.exercicios.length > 0) {
            data.exercicios.forEach(ex => {
              const card = criarCardExercicio(ex);
              container.appendChild(card);
            });
          }
        } catch (err) {
          console.error('Erro ao carregar ficha:', err);
        }
      }

      // Cria HTML do Card (Grid)
      function criarCardExercicio(exercicio) {
        const wrapper = document.createElement('div');
        wrapper.className = 'card-exercicio-wrapper';

        const card = document.createElement('div');
        card.className = `card-exercicio ${getCategoriaClass(exercicio.categoria)}`;
        // Ao clicar, abre o modal novo
        card.onclick = () => selecionarExercicio(exercicio);

        // Imagem de fundo do card
        const img = document.createElement('img');
        img.src = exercicio.imagem || 'img/placeholder.png';
        img.alt = exercicio.nome;
        card.appendChild(img);

        // Título no rodapé do card
        const titulo = document.createElement('div');
        titulo.className = 'card-exercicio-titulo';
        titulo.textContent = exercicio.nome;
        card.appendChild(titulo);

        // Botão de remover (canto superior direito)
        const removeDiv = document.createElement('div');
        removeDiv.className = 'card-exercicio-remove';
        const removeBtn = document.createElement('button');
        removeBtn.className = 'btn-remove';
        removeBtn.innerHTML = '<i class="bi bi-dash-circle-fill"></i>';
        removeBtn.onclick = (e) => {
          e.stopPropagation(); // Impede de abrir o modal ao clicar no X
          confirmarRemocao(exercicio.id_ficha_exercicio, exercicio.nome);
        };
        removeDiv.appendChild(removeBtn);
        card.appendChild(removeDiv);

        wrapper.appendChild(card);
        return wrapper;
      }

      // Confirmação de exclusão
      function confirmarRemocao(id_ficha_exercicio, nomeExercicio) {
        const confirmacao = confirm(`Tem certeza que quer remover o exercício "${nomeExercicio}"?`);
        if (confirmacao) {
          removerExercicio(id_ficha_exercicio);
        }
      }

      // Ação de remover
      async function removerExercicio(id_ficha_exercicio) {
        const form = new FormData();
        form.append('id_ficha_exercicio', id_ficha_exercicio);
        try {
          const res = await fetch('remover_exercicio.php', { method: 'POST', body: form });
          const data = await res.json();
          if (data.sucesso) {
            carregarFicha();
          } else {
            alert('Erro ao remover: ' + (data.erro || 'desconhecido'));
          }
        } catch (err) {
          console.error('Erro:', err);
          alert('Erro ao remover exercício');
        }
      }

      // Abre o NOVO Modal e preenche os dados
      function selecionarExercicio(exercicio) {
        currentExerciseId = exercicio.id_exercicio;
        
        // Preenche os textos
        document.getElementById('ex-name').textContent = exercicio.nome || 'Exercício';
        document.getElementById('ex-category').textContent = exercicio.categoria || 'Geral';
        document.getElementById('ex-equipment').textContent = exercicio.equipamento || 'Livre';
        document.getElementById('ex-description').textContent = exercicio.descricao || 'Sem descrição.';
        
        // Preenche a imagem
        const imgEl = document.getElementById('ex-image');
        imgEl.src = exercicio.imagem || 'img/placeholder.png';

        bsModal.show();
      }

      function adicionarExercicio() {
        window.location.href = `exercises.php?aluno=${encodeURIComponent(nomeAluno)}`;
      }
    </script>
</body>
</html>