<?php 
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");


$game[1]= array (
    "id" => 1,
    "nome" => "Arte da Ocultação",
    "capa" => "capathiago.jpeg",
    "descricao" => "você é um habilidoso shinobi em um jogo 2D, lutando contra hordas de esqueletos. Acumule pontos derrotando inimigos cada vez mais desafiadores. Alcance a pontuação final para vencer e trazer paz ao mundo assombrado ",
    "banner" => "banner1.jpeg",
    "jogo" => "https://gamers-paradisers.000webhostapp.com/jogue/jogothiago/",
    "criador" => "Thiago Borges Fernandes",
    "foto" => "thiagoborges.jpeg"
);
$game[3]= array (
    "id" => 3,
    "nome" => "Galactic Attack",
    "capa" => "capamilena.jpeg",
    "descricao" => "A terra está sob ameaça por membros de outros planetas devido a um conflito galático, proteja a Terra em sua nave XL7 de ataques e derrote o vilão Etron para que ele não destrua a sua casa.",
    "banner" => "Galactic.jpeg",
    "jogo" =>  "https://gamers-paradisers.000webhostapp.com/jogue/Galactic-Attack/",
    "criador" => "Milena Santos de Oliveira",
    "foto" => "milena.png"
    
);
$game[4]= array (
    "id" => 4,
    "nome" => "Piratas",
    "capa" => "capavitor.jpeg",
    "descricao" => "O destemido Capitão Diego, apelidado de 'Diego, o Espada Pequena', persegue desesperadamente o tesouro perdido, roubado pelo pirata Mike Tonelada. Com sua mini espada, Diego enfrenta tempestades, batalhas navais e segredos do passado. Em uma jornada cheia de perigos e reviravoltas, a batalha final decidirá o destino de Diego e do tesouro. ",
    "banner" => "banner3.jpeg",
    "jogo" => "https://gamers-paradisers.000webhostapp.com/jogue/piratas/",
    "criador" => "Vitor Giese",
    "foto" =>"vitorgiese.jpeg"
);

echo json_encode($game);
?>