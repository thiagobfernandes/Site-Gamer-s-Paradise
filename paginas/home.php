<?php 
$url="http://localhost/novosite/api/games.php";
$dados=file_get_contents($url);

$dados=json_decode($dados);




?>


<main > 






    <section class="carrocel">

    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="imagem/banner1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagem/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="imagem/banner3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </section>

    <section class="destaque_celular d-md-none">
        <h2 class="text-center text-light py-2 ">Destaques</h2>
        <div class="swiper w-100">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide d-flex justify-content-center">
    <div class="card" style="width: 15rem; ">
  <img src="imagem/capa2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Arte da Ocultação</h5>
    
  </div>
</div>


    </div>
    <div class="swiper-slide d-flex justify-content-center ">
    <div class="card" style="width: 15rem; ">
  <img src="imagem/capa2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Parabellum</h5>
    <
    
  </div>
</div>


    </div>
    <div class="swiper-slide d-flex justify-content-center"> 
    <div class="card" style="width: 15rem;">
  <img src="imagem/capa2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Piratas</h5>
    
    
  </div>
</div>
    </div>
    
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

  <!-- If we need scrollbar -->
  <div class="swiper-scrollbar"></div>
</div>

</section>
    <h2 class="text-light text-center py-3 d-none d-sm-block"> Destaques</h2>
    <?php 
    
    
    
    ?>
    <section class="d-none d-sm-flex justify-content-center text-center align-items-center">
        
       
    <a href="index.php?pg=jogo2">
                <div class="biblioteca d-flex flex-md-wrap flex-md-row p-md-1 desaparecer flex-column justify-content-center align-items-center gap-2  ">
                  <div class="desaparecer">
                  <div class="card bg-dark text-light" style="width: 18rem;">
                    <img src="imagem/capa2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </a>

              <a href="index.php?pg=jogo2">
                <div class="biblioteca d-flex flex-md-wrap flex-md-row p-md-1 desaparecer flex-column justify-content-center align-items-center gap-2  ">
                  <div class="desaparecer">
                  <div class="card bg-dark text-light" style="width: 18rem;">
                    <img src="imagem/capa2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </a>

              <a href="index.php?pg=jogo2">
                <div class="biblioteca d-flex flex-md-wrap flex-md-row p-md-1 desaparecer flex-column justify-content-center align-items-center gap-2  ">
                  <div class="desaparecer">
                  <div class="card bg-dark text-light" style="width: 18rem;">
                    <img src="imagem/capa2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </a>





    </section>



<?php 
$url="http://localhost/projeto/api/games.php/";
$dados=file_get_contents($url);
$dados=json_decode($dados);





?>















    <section class= "container">
     

    <div class="row">
    
        
          <h2 class="text-center text-light ">
              JOGOS
            </h2>
            <?php
            foreach($dados as $arquivos){
              ?>
      
      <div class=" col-12 col-sm-6 col-md-4 d-flex justify-content-center align-items-center ">
        
                    <div class="desaparecer">
                    <div class="card bg-dark text-light my-3 "  style="width: 18rem; ">
                      <img src="<?=$base_url?>/<?=$arquivos -> capa?>" class="card-img-top" alt="..." style="height:200px;">
                      <div class="card-body text-center">
                        <div class="card-text my-3"><strong><?=$arquivos -> nome ?></strong></div>
                            <a href="jogos/<?=$arquivos -> id?>" class="btn btn-success mb-2"> Jogar agora  <i class="fa-solid fa-play"></i></a>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?=$arquivos->id?>">
                                Mais Informações <i class="fa-solid fa-info pl-2"></i>
                            </button>

                  
                      </div>
                    </div>
                    </div>
                  </div>
                   <!-- Modal -->
                   <div class="modal fade w-100" id="modal<?=$arquivos -> id?>" tabindex="-1" aria-labelledby="ModalLabel<?=$arquivos -> id?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header bg-dark text-light">
        <h1 class="modal-title fs-5" id="ModalLabel<?=$arquivos -> id?>"> <?=$arquivos ->nome ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body bg-dark">
        <img src="<?=$base_url?>/<?=$arquivos -> banner ?>" class="w-100" alt="">
        <div class="sinopse text-center">
          <h3 class="text-center text-light"> Sobre <strong><?=$arquivos -> nome ?></strong></h2>
          <P class="text-center text-light justify-content-center"><?=$arquivos -> descricao ?></p>
          <a href="jogos/<?=$arquivos -> id?>" class="btn btn-success mb-2 "> Jogar agora  <i class="fa-solid fa-play"></i></a>



        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
                 </div>
               </div>
         </div>
        </div>
                  
           
           

              <?php 
            }
           
            

              ?>

          </div>
    </section>

   
   





  
   
   
   
   



    <section id="Formulario" class="formulario mx-md-5 py-md-3">
 
 <div class="contato  w-100 text-center " style="padding-top: 150px;" >   
   <h2 class="text-light"> CONTATO</h2>
   <p class="text-light">Enviar email</p>



 </div>

 <form method="post" id="myform"  action="./email.php" autocomplete="off " class="p-4 ">
 <div class="mb-3">
<label for="nome" class="form-label text-light">Digite seu nome</label>
<input type="text" class="form-control"  required name="nome"  id="nome" placeholder="Digite seu nome" auto-comp>
</div> 


<div class="mb-3">
<label for="email" class="form-label text-light">Email</label>
<input type="email" class="form-control text-light"  required name="email" id="email" placeholder="email@exemplo.com">
</div>
<div class="mb-3">
<label for="mensagem" class="form-label text-light">Assunto</label>
<textarea  class="form-control "  required  name="mensagem" id="mensagem" rows="3" placeholder="Digite aqui..."></textarea>
</div>


   </div>
 </div>
</div>
<div class="button w-100 text-center my-2">
<button type="submit" value="send"  class="btn btn-primary">Enviar</button>
</div>
<div class="aviso text-light"></div>
</form>
 </section>








</main>


