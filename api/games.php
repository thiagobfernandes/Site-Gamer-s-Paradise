<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");

$jogo[1]= array (
    "id" => 1,
    "nome" => "Arte da Ocultação",
    "capa" => "banner1.jpeg",
    "descricao" => "você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado ",
    "banner" => "banner1.jpeg",
    "jogo" => "http://localhost/projeto/jogue/jogothiago/"
);

$jogo[2]= array (
    "id" => 2,
    "nome" => "Parabellum",
    "capa" => "banner2.jpg",
    "descricao" => "voce e um matador de aluguel ",
    "banner" => "banner2.jpg",
    "jogo" => "http://localhost/projeto/jogue/parabellum/"
);

$jogo[3]= array (
    "id" => 3,
    "nome" => "Galactic Attack",
    "capa" => "Galactic.jpeg",
    "descricao" => "A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.",
    "banner" => "Galactic.jpeg",
    "jogo" =>  "http://localhost/projeto/jogue/Galactic-Attack/"
    
);

$jogo[4]= array (
    "id" => 4,
    "nome" => "Piratas",
    "capa" => "banner3.jpeg",
    "descricao" => "O destemido Capitão Diego, apelidado de 'Diego, o Espada Pequena', persegue desesperadamente o tesouro perdido, roubado pelo pirata Mike Tonelada. Com sua mini espada, Diego enfrenta tempestades, batalhas navais e segredos do passado. Em uma jornada cheia de perigos e reviravoltas, a batalha final decidirá o destino de Diego e do tesouro. ",
    "banner" => "banner3.jpeg"
    "jogo" =>
);

$jogo[5]= array (
    "id" => 5,
    "nome" => "Ben 10",
    "capa" => "img.webp",
    "descricao" => "voce e um matador de aluguel ",
    "banner" => "img.webp"
);

$jogo[6]= array (
    "id" => 6,
    "nome" => "The Last Words",
    "capa" => "vinicius.jpeg",
    "descricao" => "Embarque em uma jornada assustadora através de um mundo 2D repleto de perigos <br> e mistérios. Inspirado pelos grandes clássicos de survival horror como Resident Evil e The Last of Us, este jogo desenvolvido pelo PixelPulse Studios traz uma experiência única de terror e suspense. Encare desafios intensos, explore ambientes sombrios e descubra segredos macabros enquanto luta pela sobrevivência neste jogo emocionante. ",
    "banner" => "vinicius.jpeg"
);

echo json_encode($jogo);
?> 