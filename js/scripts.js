const modalsBacks = [
  {
    title: "Puxada frontal na polia alta",
    staticImg: "img/costas1.jpg",
    gif: "gifs/costas1.mp4",
    description: `• Máquina utilizada: Polia alta com barra
• Descrição: Sentado, com pegada aberta e pronada, puxe a barra até a frente do peito, contraindo os dorsais. Retorne lentamente.
• Séries: 3
• Repetições: 10 a 12
• Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-primary"
  },
  {
    title: "Remada curvada com barra",
    staticImg: "img/costas2.jpg",
    gif: "gifs/costas2.mp4",
    description: `	•	Máquina utilizada: Barra livre
	•	Descrição: Incline o tronco mantendo as costas retas e puxe a barra até o abdômen. Evite balançar o corpo.
	•	Séries: 3
	•	Repetições: 8 a 10
	•	Tempo de descanso (entre séries): 90 segundos`,
    colorClass: "bg-primary"
  },
  {
    title: "Remada baixa na polia",
    staticImg: "img/costas3.jpg",
    gif: "gifs/costas3.mp4",
    description: `	•	Máquina utilizada: Polia baixa com triangulo ou barra V
	•	Descrição: Sentado, puxe a alça em direção ao abdômen, mantendo o tronco fixo e contraindo as escápulas no final do movimento.
	•	Séries: 3
	•	Repetições: 12
	•	Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Remada unilateral com halteres (serrote)",
    staticImg: "img/costas4.jpg",
    gif: "gifs/costas4.mp4",
    description: `	•	Máquina utilizada: Haltere e banco
	•	Descrição: Com um joelho apoiado no banco, puxe o haltere com a mão oposta até a lateral do corpo, contraindo o dorsal.
	•	Séries: 3
	•	Repetições: 12 por lado
	•	Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Remada cavalinho (T-bar row)",
    staticImg: "img/costas5.jpg",
    gif: "gifs/costas5.mp4",
    description: `	•	Máquina utilizada: Barra T-bar ou adaptador
	•	Descrição: Com os pés firmes e o tronco inclinado, puxe a barra em direção ao abdômen, focando na contração das costas.
	•	Séries: 3
	•	Repetições: 10
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Barra Fixa com Pegada Supinada",
    staticImg: "img/costas6.jpg",
    gif: "gifs/costas6.mp4",
    description: `	•	Máquina utilizada: Barra fixa (ou estrutura de barra)
	•	Descrição: Pendure-se com as palmas voltadas para você (pegada supinada) e as mãos na largura dos ombros. Puxe seu corpo até que o queixo ultrapasse a barra e desça com controle.
	•	Séries: 3
	•	Repetições: Até a falha (ou 8–12, se for auxiliada)
	•	Tempo de descanso (entre séries): 90 segundos`,
    colorClass: "bg-primary"
  }
];

function createModalCardBack({ title, staticImg, gif, description, colorClass }, index) {
  const col = document.createElement("div");
  col.className = "col-md-4 col-12 mb-4";

  const card = document.createElement("div");
  card.classList.add("modal-card-purple", colorClass);
  card.dataset.toggle = "modal";
  card.dataset.target = "#gifModal";
  card.dataset.gif = gif;
  card.dataset.description = description;
  card.dataset.title = title;

  const img = document.createElement("img");
  img.src = staticImg;
  img.alt = title;

  const overlay = document.createElement("div");
  overlay.className = "overlay";

  const titleEl = document.createElement("div");
  titleEl.className = "title-hover";
  titleEl.innerText = title;

  card.appendChild(img);
  card.appendChild(overlay);
  card.appendChild(titleEl);
  col.appendChild(card);

  return col;
}

document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("modals-container-backs");

  for (let i = 0; i < modalsBacks.length; i += 3) {
    const rowGroup = document.createElement("div");
    rowGroup.className = "row w-100";

    for (let j = i; j < i + 3 && j < modalsBacks.length; j++) {
      rowGroup.appendChild(createModalCardBack(modalsBacks[j], j));
    }

    container.appendChild(rowGroup);
  }

  $('#gifModal').on('show.bs.modal', function (event) {
    const card = event.relatedTarget;
    const gif = card.dataset.gif;
    const description = card.dataset.description;
    const title = card.dataset.title;

    document.getElementById("modalTitle").innerText = title;
const video = document.getElementById("modalGif");
const source = video.querySelector("source");
source.src = gif;
video.load();  // Força o carregamento do novo vídeo

    document.getElementById("modalDescription").innerText = description;
  });

  $('#gifModal').on('hidden.bs.modal', function () {
const source = document.getElementById("modalGif").querySelector("source");
source.src = "";
document.getElementById("modalGif").load();

  });
});

const modalsUppers = [
  {
    title: "Supino Inclinado",
    staticImg: "img/peito1.jpg",
    gif: "gifs/peito1.mp4",
    description: `	•	Máquina utilizada: Banco inclinado e barra ou halteres
	•	Descrição: Deite-se em um banco inclinado entre 30° e 45°, segurando a barra com as mãos um pouco mais largas que os ombros. Abaixe a barra até o peito e empurre-a para cima até estender completamente os braços.
	•	Séries: 3
	•	Repetições: 10 a 12
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-danger"
  },
  {
    title: "Supino Reto",
    staticImg: "img/peito2.jpg",
    gif: "gifs/peito2.mp4",
    description: `	•	Máquina utilizada: Banco reto e barra
	•	Descrição: Deite-se de costas em um banco plano, segurando a barra com as mãos um pouco mais largas que os ombros. Abaixe a barra até o peito e empurre-a para cima até estender completamente os braços.
	•	Séries: 3
	•	Repetições: 8 a 10
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-warning"
  },
  {
    title: "Supino Declinado (Canadense)",
    staticImg: "img/peito3.jpg",
    gif: "gifs/peito3.mp4",
    description: `	•	Máquina utilizada: Banco declinado e barra
	•	Descrição: Deite-se em um banco declinado, segurando a barra na largura dos ombros. Abaixe a barra até o peito e empurre-a para cima até estender completamente os braços.
	•	Séries: 3
	•	Repetições: 10 a 12
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-info"
  },
    {
    title: "Crucifixo",
    staticImg: "img/peito4.jpg",
    gif: "gifs/peito4.mp4",
    description: `	•	Máquina utilizada: Banco plano e halteres
	•	Descrição: Deite-se em um banco plano com um haltere em cada mão. Estenda os braços para os lados com uma leve flexão nos cotovelos. Levante os halteres em um arco suave até que se encontrem acima do peito.
	•	Séries: 3
	•	Repetições: 12
	•	Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-warning"
  },
    {
    title: "Supino Máquina",
    staticImg: "img/peito5.jpg",
    gif: "gifs/peito5.mp4",
    description: `	•	Máquina utilizada: Máquina de supino
	•	Descrição: Ajuste o assento para que os punhos estejam alinhados próximo da altura dos ombros. Segure as alças firmemente, empurre para fora sem estender completamente os cotovelos no topo do movimento. Retorne lentamente à posição inicial.
	•	Séries: 3
	•	Repetições: 10 a 12
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-warning"
  },
    {
    title: "Paralelas",
    staticImg: "img/peito6.jpg",
    gif: "gifs/peito6.mp4",
    description: `	•	Máquina utilizada: Barras paralelas
	•	Descrição: Segure as barras paralelas com os braços estendidos. Abaixe o corpo lentamente até que os ombros estejam abaixo dos cotovelos e, em seguida, empurre-se de volta à posição inicial.
	•	Séries: 3
	•	Repetições: Até a falha muscular
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-warning"
  },
    {
    title: "Pullover com Halteres",
    staticImg: "img/peito7.jpg",
    gif: "gifs/peito7.mp4",
    description: `	•	Máquina utilizada: Banco plano e halteres
	•	Descrição: Deite-se em um banco plano segurando um haltere com ambas as mãos acima do peito. Abaixe o haltere em um arco atrás da cabeça e, em seguida, traga-o de volta à posição inicial.
	•	Séries: 3
	•	Repetições: 10 a 12
	•	Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-warning"
  },
    {
    title: "Peck Deck",
    staticImg: "img/peito8.jpg",
    gif: "gifs/peito8.mp4",
    description: `	•	Máquina utilizada: Máquina peck deck
	•	Descrição: Sente-se na máquina com os antebraços apoiados nas almofadas. Empurre os braços para frente até que se encontrem na frente do peito e, em seguida, retorne lentamente à posição inicial.
	•	Séries: 3
	•	Repetições: 12
	•	Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-warning"
  },
    {
    title: "Flexão de Braço",
    staticImg: "img/peito9.jpg",
    gif: "gifs/peito9.mp4",
    description: `	•	Máquina utilizada: Peso corporal (sem equipamento)
	•	Descrição: Deite-se de bruços com as mãos apoiadas no chão na largura dos ombros. Empurre o corpo para cima até que os braços estejam estendidos e, em seguida, abaixe-se até que o peito quase toque o chão.
	•	Séries: 3
	•	Repetições: Até a falha muscular
	•	Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-warning"
  }
];

function createModalCardUppers({ title, staticImg, gif, description, colorClass }, index) {
  const col = document.createElement("div");
  col.className = "col-md-4 col-12 mb-4";

  const card = document.createElement("div");
  card.classList.add("modal-card-purple", colorClass);
  card.dataset.toggle = "modal";
  card.dataset.target = "#gifModal";
  card.dataset.gif = gif;
  card.dataset.description = description;
  card.dataset.title = title;

  const img = document.createElement("img");
  img.src = staticImg;
  img.alt = title;

  const overlay = document.createElement("div");
  overlay.className = "overlay";

  const titleEl = document.createElement("div");
  titleEl.className = "title-hover";
  titleEl.innerText = title;

  card.appendChild(img);
  card.appendChild(overlay);
  card.appendChild(titleEl);
  col.appendChild(card);

  return col;
}

document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("modals-container-uppers");

  for (let i = 0; i < modalsUppers.length; i += 3) {
    const rowGroup = document.createElement("div");
    rowGroup.className = "row w-100";
    for (let j = i; j < i + 3 && j < modalsUppers.length; j++) {
      rowGroup.appendChild(createModalCardUppers(modalsUppers[j], j));
    }
    container.appendChild(rowGroup);
  }

  $('#gifModal').on('show.bs.modal', function (event) {
    const card = event.relatedTarget;
    const gif = card.dataset.gif;
    const description = card.dataset.description;
    const title = card.dataset.title;

    document.getElementById("modalTitle").innerText = title;
    const video = document.getElementById("modalGif");
    const source = video.querySelector("source");
    source.src = gif;
    video.load();
    document.getElementById("modalDescription").innerText = description;
  });

  $('#gifModal').on('hidden.bs.modal', function () {
    const source = document.getElementById("modalGif").querySelector("source");
    source.src = "";
    document.getElementById("modalGif").load();
  });
});
