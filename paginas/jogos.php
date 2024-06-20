<?php
$url="http://localhost/projeto/api/games.php";
$dados=file_get_contents($url);
$dados= json_decode($dados);
$dados= $dados -> $codigo;

    ?>
    <section class="container w-100 h-100">
        <section class="container-fluid">
            <h2 class="text-center text-light d-none d-md-block " ><?= $dados -> nome ?></h2>
            <div class="main_jogos justify-content-center align-items-center d-none d-lg-flex">
                <div class="main_jogo  m-4">
                    <img src="<?=$base_url?>/<?=$dados -> banner?>" alt="" >
                    <a href=""><button class="">Jogar Agora <i class="fa-solid fa-play"></i></button></a>
                </div>
            </div>
        </section>
        <section class="container-fluid text-center">
            <div class="desc_jogo text-light d-none d-md-block">
                <div class="texto d-flex flex-column justify-content-center align-items-center">
                    <h4>Sinopse</h4>
                    <p class="fs-5 w-50 text-center"><?=$dados -> descricao ?></p>
                </div>
                <div class="desenvolvedor fs-5 my-4">
                    <h4>Desenvolvido por Thiago Borges Fernandes</h4>
                    <p>Thiago Borges Fernandes, Aluno do Centro Universitário Integrado.<br> Cursando o 1º Período de TADS.</p>
                </div>
            </div>
            <a href="home" class="btn btn-primary w-10 ">VOLTAR</a>
        </section>
        <?php
        
           
        
        ?>
    </section>
