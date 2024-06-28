<?php
$url="https://gamers-paradisers.000webhostapp.com/api/games.php";
$dados=file_get_contents($url);
$dados= json_decode($dados);
$dados= $dados -> $codigo;

    ?>
    <section class="container p-4 text-center w-100">
        <div class="jogoszada text-center d-none d-md-block">
            <a data-fslightbox href="<?=$base_url?>/<?=$dados ->banner?>"> <img src="<?=$base_url?>/<?=$dados ->banner?>" alt=""></a>
            <a href="<?=$dados -> jogo ?>" target="_blank" class="btn btn-success mb-2 w-50 fs-4 rounded-5 my-4 "> Jogar agora  <i class="fa-solid fa-play"></i></a>
        
            </div>

                

            </div>

</div>


            <div class="row w-100 text-center  ">

            <div class="col-12 col-md-3 col-lg-4 text-center ">
                <a  data-fslightbox href="<?=$base_url?>/<?=$dados -> capa?>"><img src="<?=$base_url?>/<?=$dados -> capa?>" alt="<?=$dados -> nome?>"class="w-100 m-3"></a>
            </div>
            <div class="texto col-12 col-md-9 mt-3 col-lg-8 text-light text-center ">
                <h2><?=$dados -> nome ?></h2>
                <p class="fs-3"><?=$dados -> descricao?></p>


            </div>

            <div class="erro d-block d-sm-none d-md-none d-lg-none">
               
                <p class="text-center text-light">Infelizmente o jogo <?=$dados -> nome ?> não esta disponivel para o Dispositivo Movel</p>
            </div>







    </section>





    
      
   
