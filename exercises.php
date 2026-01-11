<?php

$aluno = isset($_GET['aluno']) ? trim($_GET['aluno']) : '';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Exercícios - Adicionar</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <style>
    body{
      background:#1e1e1e;
      color:#fff;
      padding-top: 80px;
    }
    
    .page-title {
      margin-top: 20px;
      margin-bottom: 30px;
    }
    
    .exercise-card {
      border-radius: 12px;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .exercise-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
    }
    
    /* Cores por categoria */
    .exercise-card-inferior {
      background: linear-gradient(135deg, #9c27b0 0%, #6a1b9a 100%);
    }
    
    .exercise-card-costas {
      background: linear-gradient(135deg, #ff9800 0%, #f57c00 100%);
    }
    
    .exercise-card-superior {
      background: linear-gradient(135deg, #00bcd4 0%, #0097a7 100%);
    }
    
    .exercise-card-peito {
      background: linear-gradient(135deg, #e91e63 0%, #c2185b 100%);
    }
    
    .exercise-card-perna {
      background: linear-gradient(135deg, #ff5722 0%, #d84315 100%);
    }
    
    .exercise-title {
      color: white;
      font-weight: bold;
      font-size: 1rem;
      margin-bottom: 8px;
    }
    
    .exercise-info {
      color: rgba(255, 255, 255, 0.9);
      font-size: 0.85rem;
      margin-bottom: 12px;
    }
    
    .exercise-image-container {
      width: 100%;
      height: 200px;
      overflow: hidden;
      border-radius: 8px;
      margin-bottom: 12px;
      background: rgba(0, 0, 0, 0.2);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .exercise-image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    
    .btn-adicionar-exercise {
      background-color: white;
      color: #333;
      border: none;
      font-weight: bold;
      padding: 10px 16px;
      border-radius: 20px;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 0.9rem;
    }
    
    .btn-adicionar-exercise:hover {
      background-color: #f0f0f0;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="d-flex justify-content-between align-items-center page-title">
      <h3 class="text-white mb-0">Adicionar exercício<?php if($aluno) echo ' à ficha de: <strong>'.htmlspecialchars($aluno).'</strong>'; ?></h3>
      <a href="editar_treino.php?aluno=<?php echo urlencode($aluno); ?>" class="btn btn-light">Voltar</a>
    </div>
    <div id="ex-list" class="row g-4"></div>
  </div>

  <script>
    async function fetchExercises(){
      const res = await fetch('get_exercises.php');
      const data = await res.json();
      const container = document.getElementById('ex-list');
      container.innerHTML='';
      if(data.exercicios){
        data.exercicios.forEach(ex=>{
          const col = document.createElement('div'); 
          col.className='col-12 col-sm-6 col-md-4 col-lg-3';
          
          const card = document.createElement('div'); 
          card.className='exercise-card ' + getCategoriaClass(ex.category);
          
          const title = document.createElement('h5'); 
          title.className='exercise-title';
          title.textContent = ex.name;
          
          const info = document.createElement('div'); 
          info.className='exercise-info';
          info.textContent = ex.category + (ex.equipment? ' • '+ex.equipment:'');
          
          const imgContainer = document.createElement('div'); 
          imgContainer.className='exercise-image-container';
          
          if(ex.image){
            const img = document.createElement('img'); 
            img.src = ex.image; 
            img.alt = ex.name; 
            imgContainer.appendChild(img);
          }
          
          const btn = document.createElement('button'); 
          btn.className='btn-adicionar-exercise w-100';
          btn.textContent='Adicionar';
          btn.onclick = () => addToFicha(ex.id);
          
          card.appendChild(title);
          card.appendChild(info);
          card.appendChild(imgContainer);
          card.appendChild(btn);
          col.appendChild(card);
          container.appendChild(col);
        })
      }
    }

    function getCategoriaClass(categoria) {
      const cat = (categoria || '').toLowerCase();
      if (cat.includes('inferior') || cat.includes('perna')) return 'exercise-card-inferior';
      if (cat.includes('costas')) return 'exercise-card-costas';
      if (cat.includes('superior') || cat.includes('braço')) return 'exercise-card-superior';
      if (cat.includes('peito')) return 'exercise-card-peito';
      return 'exercise-card-perna';
    }

    async function addToFicha(exId){
      const aluno = new URLSearchParams(window.location.search).get('aluno') || '';
      if(!aluno){ alert('Aluno não definido.'); return; }
      const form = new FormData();
      form.append('aluno', aluno);
      form.append('id_exercicio', exId);
      const res = await fetch('add_to_ficha.php', {method:'POST', body: form});
      const data = await res.json();
      if(data.sucesso){
        alert('Exercício adicionado à ficha.');
        window.location.href = 'editar_treino.php?aluno=' + encodeURIComponent(aluno);
      } else {
        alert('Erro: '+(data.erro||'desconhecido'));
      }
    }

    fetchExercises();
  </script>
</body>
</html>