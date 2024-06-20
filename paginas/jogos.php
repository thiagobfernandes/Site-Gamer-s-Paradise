<?php
$url="http://localhost/projeto/api/games.php";
$dados=file_get_contents($url);
$dados= json_decode($dados);
$dados= $dados -> $codigo;

    ?>
    <section class="container">
        <div class="jogoszada text-center">
            <img src="<?=$base_url?>/<?=$dados ->banner?>" alt="">
            <a href="<?=$dados -> jogo ?>" class="btn btn-success mb-2 w-25 fs-4 rounded-5"> Jogar agora  <i class="fa-solid fa-play"></i></a>
        
            </div>

                

            </div>

</div>


            <div class="row w-100 mt-4">

            <div class="imagem col-12 col-md-3 col-lg-4 ">
                <img src="<?=$base_url?>/<?=$dados -> banner?>" alt="<?=$dados -> nome?>" class="w-100">
            </div>
            <div class="texto col-12 col-md-9 col-lg-8 text-light text-center ">
                <h2><?=$dados -> nome ?></h2>
                <p class="fs-5"><?=$dados -> descricao?></p>


            </div>







    </section>





    
      
   
