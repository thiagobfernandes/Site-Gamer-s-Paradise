
<?php 
$url="http://localhost/projeto/api/games.php/";
$dados=file_get_contents($url);
$dados=json_decode($dados);





?>















    <section class= "container" id="jogos">
     

    <div class="row">
    
        
          <h2 class="text-center text-light ">
              Desenvolvedores
            </h2>
            <?php
            foreach($dados as $arquivos){
              ?>
      
      <div class=" col-12  col-md-6 col-lg-4 d-flex justify-content-center align-items-center  ">
        
                    <div class="desaparecer ">
                    <div class="card bg-dark text-light my-3  "  style="width: 18rem; ">
                      <img src="<?=$base_url?>/<?=$arquivos -> foto?>" class="card-img-top" alt="..." style="height:300px;">
                      <div class="card-body text-center">
                        <div class="card-text my-3"><strong><?=$arquivos -> criador ?></strong></div>
                        <p>Criador do Jogo <?=$arquivos -> nome ?></p>
                         
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?=$arquivos->id?>">
                                Sobre o Jogo <i class="fa-solid fa-info pl-2"></i>
                            </button>

                  
                      </div>
                    </div>
                    </div>
                  </div>
                   <!-- Modal -->
                   <div class="modal fade w-100 " id="modal<?=$arquivos -> id?>" tabindex="-1" aria-labelledby="ModalLabel<?=$arquivos -> id?>" aria-hidden="true">
  <div class="modal-dialog p-0">
    <div class="modal-content bg-dark ">
    <img src="<?=$base_url?>/<?=$arquivos -> banner ?>" class="w-100" alt="">
      
      
        
      
      <div class="modal-body bg-dark p-0" id="ModalLabel<?=$arquivos -> id?>">>
       
        <div class="sinopse text-center">
          <h3 class="text-center text-light"> Sobre <strong><?=$arquivos -> nome ?></strong></h2>
          <P class="text-center text-light justify-content-center px-4 fs-6"><?=$arquivos -> descricao ?></p>
          <div class="flex">
            <h5 class="text-center text-light ">Desenvolvido por <?=$arquivos -> criador ?></h3>
            <p class="text-center text-light px-4 fs-6">Aluno(a) do Centro Universitário Integrado, Cursando o 1° Periodo de Análise e Desenvolvimento de Sistemas</p>
          </div>
          <a href="jogos/<?=$arquivos -> id?>" class="btn btn-success mb-2 "> Jogar agora  <i class="fa-solid fa-play"></i></a>



        </div>
       
      </div>
      <div class="modal-footer border-0">
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
