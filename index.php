<?php 
$url="http://localhost/novosite/api/games.php/";
$base_url="http://localhost/novosite/imagem/";




?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gamer's Paradise</title>
    <link rel="shortcut icon" href="imagem/computer-game.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
 

  </head>
  <body>
    <header class=" w-100 ">
    <nav class="navbar navbar-expand-lg bg-body-tertiary p-0 m-0 w-100">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand" href="index.php?pg=home"><img  src="imagem/logo.png" alt=""></a>
    <button class="navbar-toggler text-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span><i class="fa-solid fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end " id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link text-light fs-5"  href="index.php?pg=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="index.php?pg=contatos">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" href="index.php?pg=desenvolvedores" >Desenvolvedores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light fs-5" >Jogos</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
    </header>
<main>
<?php 
  $pg = $_GET["pg"] ?? "home";
  $pgPath = "paginas/{$pg}.php";

  if (file_exists($pgPath)) {
    include $pgPath;
  } 
   
  ?>
</main>






    <footer class="p-2 text-center text-light py-5 footerzada ">
  <h4>Desenvolvido por <br> Thiago Borges Fernandes</h3>

  <div class="redes">
    <a class="text-light px-2 fs-4" href=""><i class="fa-brands fa-instagram"></i></a>
    <a  class="text-light px-2 fs-4"  href=""><i class="fa-brands fa-github"></i></a>
    <a class="text-light px-2 fs-4"   href=""><i class="fa-brands fa-facebook"></i></a>

  </div>




  <script>

</script>






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script><script src="https://kit.fontawesome.com/ad33ce79da.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="scripts/index.js"></script>
<script> 
 const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination


  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


});
 
 
 
 
 
 
 </script>


  </body>
</html>