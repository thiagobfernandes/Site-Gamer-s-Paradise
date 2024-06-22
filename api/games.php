<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$jogo[1]= array (
    "id" => 1,
    "nome" => "Arte da Ocultação",
    "capa" => "capathiago.jpeg",
    "descricao" => "você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado ",
    "banner" => "banner1.jpeg",
    "jogo" => "https://teste4-production.up.railway.app/jogue/jogothiago/",
    "criador" => "Thiago Borges Fernandes",
    "foto" => "thiagoborges.jpeg"
);

$jogo[2]= array (
    "id" => 2,
    "nome" => "Parabellum",
    "capa" => "capaparebellum.jpeg",
    "descricao" => "Em 'Parabellum,' você é um agente especial eliminando alvos estratégicos globalmente. Usando inteligência, disfarces e armas avançadas, execute operações com precisão. Cada segundo conta e qualquer erro pode ser fatal. Prepare-se para uma intensa experiência de espionagem. ",
    "banner" => "banner2.jpg",
    "jogo" => "https://teste4-production.up.railway.app/jogue/Parabellum/",
    "criador" => "Bruno Gotardo",
    "foto" => "pombo.jpeg"
);

$jogo[3]= array (
    "id" => 3,
    "nome" => "Galactic Attack",
    "capa" => "capamilena.jpeg",
    "descricao" => "A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.",
    "banner" => "Galactic.jpeg",
    "jogo" =>  "https://teste4-production.up.railway.app/jogue/Galactic-Attack/",
    "criador" => "Milena Santos de Oliveira",
    "foto" => "milena.png"
    
);

$jogo[4]= array (
    "id" => 4,
    "nome" => "Piratas",
    "capa" => "capavitor.jpeg",
    "descricao" => "Capitão Diego, 'o Espada Pequena' persegue o tesouro roubado pelo pirata Mike Tonelada. Em uma jornada cheia de perigos, ele enfrenta tempestades e batalhas navais, culminando em uma batalha final decisiva.",

    "banner" => "banner3.jpeg",
    "jogo" => "https://teste4-production.up.railway.app/jogue/piratas/",
    "criador" => "Vitor Giese",
    "foto" =>"vitorgiese.jpeg"
);

$jogo[5]= array (
    "id" => 5,
    "nome" => "Ben 10",
    "capa" => "capagaben10.jpeg",
    "descricao" => "Em 'Ben 10: Corrida Contra Vilgax', os jogadores controlam Ben Tennyson, desviam dos ataques de Vilgax e coletam Omnitrices para aumentar a pontuação. O objetivo é ajudar Ben a escapar de Vilgax e proteger o Omnitrix. ",
    "banner" => "img.webp",
    "jogo" => "https://teste4-production.up.railway.app/jogue/Jogo/",
    "criador" => "Joao Felipe Bosco",
    "foto" => "joaofelipe.jpeg"
);

$jogo[6]= array (
    "id" => 6,
    "nome" => "Survivor",
    "capa" => "capasurvivor.jpeg",
    "descricao" => "após sair do abrigo onde você mora com um grupo de sobreviventes, uma horda acaba o separando fazendo com que tenha que atravessa-la a força ",
    "banner" => "survivor.png",
    "jogo" => "https://teste4-production.up.railway.app/jogue/Survivor/",
    "criador" => "Lucas Barbosa",
    "foto" => "gato.jpeg"
);

echo json_encode($jogo);
?> 