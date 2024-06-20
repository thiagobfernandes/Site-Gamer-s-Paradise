<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$jogo[1]= array (
    "id" => 1,
    "nome" => "Arte da Ocultação",
    "capa" => "banner1.jpeg",
    "descricao" => "você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado ",
    "banner" => "banner1.jpeg",
    "jogo" => "http://localhost/projeto/jogue/jogothiago/",
    "criador" => "Thiago Borges Fernandes",
    "foto" => "thiagoborges.jpeg"
);

$jogo[2]= array (
    "id" => 2,
    "nome" => "Parabellum",
    "capa" => "banner2.jpg",
    "descricao" => "Em 'Parabellum', você é um agente especial em uma missão secreta para eliminar alvos estratégicos antes que eles escapem. Usando inteligência, disfarces e armas avançadas, você deve executar cada operação com precisão ao redor do mundo, enfrentando desafios e obstáculos inesperados. Cada segundo conta e qualquer erro pode ser fatal. Prepare-se para uma experiência intensa de espionagem. ",
    "banner" => "banner2.jpg",
    "jogo" => "http://localhost/projeto/jogue/parabellum/",
    "criador" => "Bruno Gotardo"
);

$jogo[3]= array (
    "id" => 3,
    "nome" => "Galactic Attack",
    "capa" => "Galactic.jpeg",
    "descricao" => "A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.",
    "banner" => "Galactic.jpeg",
    "jogo" =>  "http://localhost/projeto/jogue/Galactic-Attack/",
    "criador" => "Milena Santos de Oliveira",
    "foto" => "milena.png"
    
);

$jogo[4]= array (
    "id" => 4,
    "nome" => "Piratas",
    "capa" => "banner3.jpeg",
    "descricao" => "O destemido Capitão Diego, apelidado de 'Diego, o Espada Pequena', persegue desesperadamente o tesouro perdido, roubado pelo pirata Mike Tonelada. Com sua mini espada, Diego enfrenta tempestades, batalhas navais e segredos do passado. Em uma jornada cheia de perigos e reviravoltas, a batalha final decidirá o destino de Diego e do tesouro. ",
    "banner" => "banner3.jpeg",
    "jogo" => "http://localhost/projeto/jogue/piratas/",
    "criador" => "Vitor Giese",
    "foto" =>"vitorgiese.jpeg"
);

$jogo[5]= array (
    "id" => 5,
    "nome" => "Ben 10",
    "capa" => "img.webp",
    "descricao" => "Em 'Ben 10: Corrida Contra Vilgax', os jogadores controlam Ben Tennyson, que deve correr e desviar dos ataques de Vilgax enquanto coleta Omnitrices para aumentar sua pontuação. Com gráficos vibrantes e controles simples, o objetivo é ajudar Ben a escapar de Vilgax e manter o Omnitrix seguro. Teste suas habilidades e veja se consegue proteger o Omnitrix nesta corrida emocionante! ",
    "banner" => "img.webp",
    "jogo" => "http://localhost/projeto/jogue/Jogo/",
    "criador" => "Joao Felipe Bosco",
    "foto" => "joaofelipe.jpeg"
);

$jogo[6]= array (
    "id" => 6,
    "nome" => "Survivor",
    "capa" => "survivor.png",
    "descricao" => "após sair do abrigo onde você mora com um grupo de sobreviventes, uma horda acaba o separando fazendo com que tenha que atravessa-la a força ",
    "banner" => "survivor.png",
    "jogo" => "http://localhost/projeto/jogue/Survivor/",
    "criador" => "Lucas Barbosa",
);

echo json_encode($jogo);
?> 