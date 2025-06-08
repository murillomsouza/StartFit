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
  },
      {
    title: "Remada Baixa com Corda ou Barra (Seated Cable Row ou Remada Baixa em Pé com Corda)",
    staticImg: "img/costas7.png",
    gif: "gifs/costas7.gif",
    description: `	• Máquina utilizada: Crossover ou puxador com pegador (corda ou barra curta)
	•	Descrição: Posicione-se com os joelhos levemente flexionados e incline ligeiramente o tronco à frente, mantendo a coluna reta. Segure a corda ou barra com os braços estendidos. Puxe o cabo em direção ao abdômen, contraindo as escápulas, e depois retorne lentamente à posição inicial.
	•	Séries: 3
	•	Repetições: 10 a 12
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-primary"
  },
      {
    title: "Remada Unilateral na Máquina Hammer (Chest Supported Row)",
    staticImg: "img/costas8.png",
    gif: "gifs/costas8.gif",
    description: `	• Máquina utilizada: Remada na máquina com apoio peitoral (Hammer ou similar)
	•	Descrição: Sente-se ou apoie o peitoral na almofada da máquina, posicionando os pés firmemente na base. Segure as alças com os braços estendidos e puxe o peso em direção ao tronco, contraindo as escápulas no final do movimento. Retorne de forma controlada à posição inicial. Pode ser feito de forma unilateral ou bilateral.
	•	Séries: 3
	•	Repetições: 8 a 12
	•	Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-primary"
  },
        {
    title: "Pulldown com Corda (Pullover no Cross ou Stiff de Costas com Corda)",
    staticImg: "img/costas9.png",
    gif: "gifs/costas9.gif",
    description: `	• Máquina utilizada: Crossover ou polia alta com corda
	•	Descrição: Fique em pé, com os joelhos levemente flexionados e o tronco levemente inclinado à frente. Segure a corda com os braços estendidos acima da cabeça. Puxe a corda para baixo em um movimento de arco, mantendo os braços retos, até que as mãos fiquem próximas às coxas. Retorne de forma controlada à posição inicial.
	•	Séries: 3
	•	Repetições: 12 a 15
	•	Tempo de descanso (entre séries): 60 segundos`,
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
  document.getElementById("modalDescription").innerText = description;

  const modalContent = document.getElementById("modalMedia");
  modalContent.innerHTML = ""; // limpa conteúdo anterior

  if (gif.endsWith(".mp4")) {
    const video = document.createElement("video");
    video.setAttribute("controls", "");
    video.setAttribute("autoplay", "");
    video.setAttribute("loop", "");
    video.setAttribute("muted", "");
    video.className = "img-fluid mb-3";

    const source = document.createElement("source");
    source.src = gif;
    source.type = "video/mp4";

    video.appendChild(source);
    modalContent.appendChild(video);
  } else if (gif.endsWith(".gif")) {
    const img = document.createElement("img");
    img.src = gif;
    img.className = "img-fluid mb-3";
    modalContent.appendChild(img);
  }
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

const modalsWarmups = [
  {
    title: "Alongamento de Quadríceps em Pé com Equilíbrio",
    staticImg: "img/aquecimento1.png",
    gif: "gifs/aquecimento1.gif",
    description: `• Máquina utilizada: Nenhuma (exercício feito com peso corporal)
• Descrição: Fique em pé com a coluna ereta. Dobre uma das pernas para trás, segurando o pé com a mão do mesmo lado. Mantenha os joelhos alinhados e o abdômen contraído, puxando o pé em direção aos glúteos. Estenda o braço oposto à frente para manter o equilíbrio.
• Séries: 2 (para cada perna) 
• Repetições: Mantenha a posição por 20 a 30 segundos
• Tempo de descanso (entre pernas): 15 segundos`,
    colorClass: "bg-primary"
  },
  {
    title: "Elevação de Joelhos Alternada (Marcha no Lugar)",
    staticImg: "img/aquecimento2.png",
    gif: "gifs/aquecimento2.gif",
    description: `• Máquina utilizada: Nenhuma (exercício com peso corporal)
• Descrição: Em pé, com o tronco ereto, eleve um dos joelhos até a altura do quadril, mantendo o abdômen contraído e os braços dobrados próximos ao tronco. Alterne rapidamente as pernas simulando uma marcha no lugar, mantendo ritmo e controle no movimento.
• Séries: 3 
• Repetições: 20 a 30 elevações (10 a 15 por perna)
• TTempo de descanso (entre séries): 30 a 45 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Alongamento de Glúteo em Pé (Puxando o Joelho para o Peito em Rotação Externa)",
    staticImg: "img/aquecimento3.png",
    gif: "gifs/aquecimento3.gif",
    description: `• Máquina utilizada: Nenhuma (exercício com peso corporal)
•Descrição: Em pé, com a postura ereta, cruze uma perna sobre a outra em formato de “4” (colocando o tornozelo sobre a coxa oposta) e segure a canela com ambas as mãos. Puxe suavemente a perna em direção ao peito, sentindo o alongamento nos glúteos e quadril. Mantenha o abdômen ativado para equilíbrio.
• Séries: 2 (para cada perna) 
• Repetições: Mantenha a posição por 20 a 30 segundos
• Tempo de descanso (entre pernas): 15 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Alongamento Dinâmico de Adução (Agachamento Lateral Alternado)",
    staticImg: "img/aquecimento4.png",
    gif: "gifs/aquecimento4.gif",
    description: `• Máquina utilizada: Nenhuma (exercício com peso corporal)
• Descrição: Fique em pé com as pernas bem afastadas. Flexione um joelho, deslocando o corpo para o lado enquanto mantém a outra perna estendida. Retorne ao centro e repita para o outro lado. Mantenha o tronco ereto e o abdômen contraído durante o movimento.
• Séries: 2
• Repetições: 10 a 12 repetições por lado
• Tempo de descanso (entre séries): 30 a 45 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Torção de Tronco com Rotação de Quadril (Twist Dinâmico)",
    staticImg: "img/aquecimento5.png",
    gif: "gifs/aquecimento5.gif",
    description: `• Máquina utilizada: Nenhuma (exercício com peso corporal)
• Descrição: Fique em pé com os pés afastados na largura dos ombros e os braços flexionados à frente do tronco. Gire o tronco para um lado enquanto o pé oposto se eleva levemente, acompanhando o movimento com o quadril. Alterne os lados de forma contínua, mantendo o abdômen contraído e os ombros relaxados.
• Séries: 2 a 3 
• Repetições: 20 rotações (10 para cada lado)
• Tempo de descanso (entre séries): 30 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Inclinação Lateral com Haltere (Side Bends)",
    staticImg: "img/aquecimento6.png",
    gif: "gifs/aquecimento6.gif",
    description: `• Máquina utilizada: Haltere leve (ou garrafinha com água, se feito em casa)
• Descrição: Fique em pé com os pés afastados na largura dos ombros. Segure um haltere com uma das mãos ao lado do corpo, enquanto a outra mão fica posicionada atrás da cabeça. Incline o tronco lateralmente em direção ao haltere, ativando o abdômen e retornando à posição inicial. Após as repetições de um lado, troque de mão.
• Séries: 2 a 3 (para cada lado)
• Repetições: 12 a 15 repetições por lado
• Tempo de descanso (entre lados): 15 a 30 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Russian Twist (Torção Russa de Tronco)",
    staticImg: "img/aquecimento7.png",
    gif: "gifs/aquecimento7.gif",
    description: `• Máquina utilizada: Nenhuma (exercício feito com peso corporal)
• Descrição: Sente-se no chão com os joelhos flexionados e os pés levemente elevados. Incline levemente o tronco para trás, mantendo as costas retas. Gire o tronco para um lado, levando os braços juntos, e depois para o outro lado, realizando uma torção dinâmica do abdômen.
• Séries: 3 
• Repetições: 20 rotações (10 para cada lado)
• Tempo de descanso (entre séries): 30 a 45 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Prancha Lateral com Elevação de Quadril (Side Plank Hip Lifts)",
    staticImg: "img/aquecimento8.png",
    gif: "gifs/aquecimento8.gif",
    description: `• Máquina utilizada: Nenhuma (exercício feito com peso corporal)
• Descrição: Deite-se de lado com as pernas estendidas e os pés juntos. Apoie o antebraço no chão abaixo do ombro e eleve o quadril, formando uma linha reta da cabeça aos pés. Em seguida, abaixe o quadril sem encostar no chão e eleve novamente, realizando o movimento de forma controlada.
• Séries: 2 a 3 (para cada lado) 
• Repetições: 10 a 15 repetições por lado
• Tempo de descanso (entre lados): 20 a 30 segundos`,
    colorClass: "bg-primary"
  },
    {
    title: "Elevação de Quadril com Apoio nas Mãos (Reverse Tabletop Bridge)",
    staticImg: "img/aquecimento9.png",
    gif: "gifs/aquecimento9.gif",
    description: `• Máquina utilizada: Nenhuma (exercício feito com peso corporal)
• Descrição: Sente-se no chão com os joelhos flexionados e os pés apoiados no solo, afastados na largura do quadril. Apoie as mãos atrás do corpo, com os dedos voltados para os calcanhares. Eleve o quadril em direção ao teto até formar uma linha reta dos ombros aos joelhos, contraindo os glúteos. Retorne à posição inicial e repita.
• Séries: 2 a 3
• Repetições: 10 a 15 repetições
• Tempo de descanso (entre séries): 30 a 45 segundos`,
    colorClass: "bg-primary"
  },
];

function createModalCardWarmups({ title, staticImg, gif, description, colorClass }, index) {
  const col = document.createElement("div");
  col.className = "col-md-4 col-12 mb-4";

  const card = document.createElement("div");
  card.classList.add("modal-card-purple", colorClass);
  card.dataset.toggle = "modal";
  card.dataset.target = "#gifModalWarmups";
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
  const container = document.getElementById("modals-container-warmups");

  for (let i = 0; i < modalsWarmups.length; i += 3) {
    const rowGroup = document.createElement("div");
    rowGroup.className = "row w-100";

    for (let j = i; j < i + 3 && j < modalsWarmups.length; j++) {
      rowGroup.appendChild(createModalCardWarmups(modalsWarmups[j], j));
    }

    container.appendChild(rowGroup);
  }

  $('#gifModalWarmups').on('show.bs.modal', function (event) {
    const card = event.relatedTarget;
    const gif = card.dataset.gif;
    const description = card.dataset.description;
    const title = card.dataset.title;

    document.getElementById("modalTitleWarmups").innerText = title;
    document.getElementById("modalDescriptionWarmups").innerText = description;

    const modalContent = document.getElementById("modalMediaWarmups");
    modalContent.innerHTML = ""; // limpa conteúdo anterior

    const img = document.createElement("img");
    img.src = gif;
    img.className = "img-fluid mb-3";
    modalContent.appendChild(img);
  });

  $('#gifModalWarmups').on('hidden.bs.modal', function () {
    document.getElementById("modalMediaWarmups").innerHTML = "";
  });
});

const modalsLowers = [
  {
    title: "Agachamento Livre com Barra",
    staticImg: "img/pernas1.jpeg",
    gif: "gifs/pernas1.gif",
    description: `Máquina utilizada: Rack de agachamento (gaiola), barra e anilhas.
Descrição: Posicione a barra sobre os ombros (trapézio), nunca sobre o pescoço. Mantenha os pés afastados na largura dos ombros, com as pontas ligeiramente apontadas para fora. Agache como se fosse sentar em uma cadeira, mantendo o peito aberto, as costas retas e o abdômen contraído. Desça até que suas coxas fiquem pelo menos paralelas ao chão e depois retorne à posição inicial.
Séries: 3 a 4
Repetições: 8 a 12
Tempo de descanso (entre séries): 60 a 90 segundos`,
    colorClass: "bg-success"
  },
  {
    title: "Leg Press 45°",
    staticImg: "img/pernas2.png",
    gif: "gifs/pernas2.gif",
    description: `Máquina utilizada: Leg Press 45°
Descrição: Sente-se no aparelho e posicione os pés na plataforma, afastados na largura dos ombros. Destrave a segurança e empurre a plataforma para cima até que suas pernas estejam quase estendidas (não trave os joelhos). Flexione lentamente os joelhos para trazer a plataforma em direção ao seu peito, mantendo o controle do movimento. Empurre de volta à posição inicial.
Séries: 3 a 4
Repetições: 10 a 15
Tempo de descanso (entre séries): 60 segundoss`,
    colorClass: "bg-warning"
  },
  {
    title: "Cadeira Extensora",
    staticImg: "img/pernas3.png",
    gif: "gifs/pernas3.gif",
    description: `Máquina utilizada: Cadeira Extensora
Descrição: Sente-se na máquina com as costas bem apoiadas e ajuste o rolo de espuma sobre a parte inferior das canelas, logo acima dos pés. Segure as alças laterais para estabilidade. Estenda as pernas para cima, contraindo o quadríceps (músculo da frente da coxa), até que estejam retas. Retorne lentamente à posição inicial.
Séries: 3
Repetições: 12 a 15
Tempo de descanso (entre séries): 45 a 60 segundos`,
    colorClass: "bg-success"
  },
    {
    title: " Mesa Flexora",
    staticImg: "img/pernas4.png",
    gif: "gifs/pernas4.gif",
    description: `Máquina utilizada: Mesa Flexora
Descrição: Deite-se de bruços na máquina, com os joelhos logo para fora da borda do banco. Posicione o rolo de espuma na parte de trás dos tornozelos. Flexione os joelhos, puxando o rolo em direção aos seus glúteos e contraindo os músculos posteriores da coxa. Retorne à posição inicial de forma controlada.
Séries: 3
Repetições: 12 a 15
Tempo de descanso (entre séries): 45 a 60 segundos`,
    colorClass: "bg-success"
  },
    {
    title: " Afundo com Halteres",
    staticImg: "img/pernas5.png",
    gif: "gifs/pernas5.gif",
    description: `Máquina utilizada: Halteres
Descrição: Fique em pé, segurando um halter em cada mão ao lado do corpo. Dê um passo à frente com uma perna e flexione ambos os joelhos para baixar o corpo, até que o joelho da perna de trás quase toque o chão. O joelho da frente deve formar um ângulo de 90 graus. Empurre o chão com o pé da frente para retornar à posição inicial. Alterne as pernas.
Séries: 3 por perna
Repetições: 10 a 12 por perna
Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-success"
  },
    {
    title: "Cadeira Adutora",
    staticImg: "img/pernas6.png",
    gif: "gifs/pernas6.gif",
    description: `Cadeira Adutora
Descrição: Sente-se na máquina com as costas apoiadas. Posicione a parte interna das coxas contra as almofadas. Aperte as pernas juntas, movendo as almofadas em direção ao centro, contraindo os músculos adutores (parte interna da coxa). Retorne lentamente à posição inicial, controlando o movimento.
Séries: 3
Repetições: 15 a 20
Tempo de descanso (entre séries): 45 segundos`,
    colorClass: "bg-success"
  },
    {
    title: "Cadeira Abdutora",
    staticImg: "img/pernas7.png",
    gif: "gifs/pernas7.gif",
    description: `Máquina utilizada: Cadeira Abdutora
Descrição: Sente-se na máquina com as costas apoiadas. Posicione a parte externa das coxas contra as almofadas. Empurre as pernas para fora, afastando as almofadas e contraindo os glúteos e a parte lateral das coxas. Retorne lentamente à posição inicial de forma controlada.
Séries: 3
Repetições: 15 a 20
Tempo de descanso (entre séries): 45 segundos`,
    colorClass: "bg-success"
  },
    {
    title: "Elevação Pélvica com Barra",
    staticImg: "img/pernas8.png",
    gif: "gifs/pernas8.gif",
    description: `Máquina utilizada: Banco reto, barra e anilhas (pode usar uma almofada para a barra).
Descrição: Sente-se no chão com a parte superior das costas (escápulas) apoiada em um banco. Role uma barra carregada sobre suas pernas até que ela fique posicionada sobre o quadril. Com os pés firmes no chão e os joelhos dobrados, levante o quadril em direção ao teto, contraindo fortemente os glúteos. O corpo deve formar uma linha reta dos ombros aos joelhos. Desça o quadril de forma controlada.
Séries: 3 a 4
Repetições: 10 a 15
Tempo de descanso (entre séries): 60 segundos`,
    colorClass: "bg-success"
  },
    {
    title: "Panturrilha em Pé",
    staticImg: "img/pernas9.png",
    gif: "gifs/pernas9.gif",
    description: `Máquina utilizada: Máquina de panturrilha em pé ou Máquina Smith.
Descrição: Posicione a parte da frente dos pés sobre a plataforma, deixando os calcanhares livres. A carga deve estar apoiada sobre seus ombros. Mantenha as pernas retas. Desça os calcanhares o máximo possível para alongar as panturrilhas. Em seguida, eleve os calcanhares o mais alto que puder, contraindo os músculos da panturrilha.
Séries: 3 a 4
Repetições: 15 a 20
Tempo de descanso (entre séries): 30 a 45 segundos`,
    colorClass: "bg-success"
  },
];

function createModalCardLower({ title, staticImg, gif, description, colorClass }, index) {
  const col = document.createElement("div");
  col.className = "col-md-4 col-12 mb-4";

  const card = document.createElement("div");
  card.classList.add("modal-card-purple", colorClass);
  card.dataset.toggle = "modal";
  card.dataset.target = "#gifModalLower";
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
  const container = document.getElementById("modals-container-lowers");

  for (let i = 0; i < modalsLowers.length; i += 3) {
    const rowGroup = document.createElement("div");
    rowGroup.className = "row w-100";

    for (let j = i; j < i + 3 && j < modalsLowers.length; j++) {
      rowGroup.appendChild(createModalCardLower(modalsLowers[j], j));
    }

    container.appendChild(rowGroup);
  }

  $('#gifModalLower').on('show.bs.modal', function (event) {
    const card = event.relatedTarget;
    const gif = card.dataset.gif;
    const description = card.dataset.description;
    const title = card.dataset.title;

    document.getElementById("modalTitleLower").innerText = title;
    document.getElementById("modalDescriptionLower").innerText = description;

    const modalContent = document.getElementById("modalMediaLower");
    modalContent.innerHTML = ""; // limpa conteúdo anterior

    if (gif.endsWith(".mp4")) {
      const video = document.createElement("video");
      video.setAttribute("controls", "");
      video.setAttribute("autoplay", "");
      video.setAttribute("loop", "");
      video.setAttribute("muted", "");
      video.className = "img-fluid mb-3";

      const source = document.createElement("source");
      source.src = gif;
      source.type = "video/mp4";

      video.appendChild(source);
      modalContent.appendChild(video);
    } else if (gif.endsWith(".gif")) {
      const img = document.createElement("img");
      img.src = gif;
      img.className = "img-fluid mb-3";
      modalContent.appendChild(img);
    }
  });

  $('#gifModalLower').on('hidden.bs.modal', function () {
    const modalContent = document.getElementById("modalMediaLower");
    modalContent.innerHTML = ""; // Limpa o conteúdo ao fechar
  });
});
