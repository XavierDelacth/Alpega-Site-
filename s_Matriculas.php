<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Matrículas </title>

    <!--//! Start Area GOOGLE Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap?vm=<?php echo time(); ?>" rel="stylesheet">
    <!--//! End Area GOOGLE Fonts -->

 
    <!--//! Start Area Bootstrap -->
    <link rel="stylesheet" href="./assets/Bootstrap/CSS/bootstrap.min.css">
    <!--//! End Area Bootstrap -->

      <!--//! Start Area Font Awesome -->
      <link rel="stylesheet" href="./assets/fontawesome-free-6.0.0-web/css/all.css">
      <!--//! End Area Font Awesome -->

      <!--//! Start Area CSS -->
      <link rel="stylesheet" href="./CSS/custon.css">
      <link rel="stylesheet" href="./CSS/Query.css">
      <link rel="stylesheet" href="./CSS/config.css">
      <link rel="stylesheet" href="./CSS/matriculaspage1.css">
     <!--//! End Area CSS -->


     <!-//! Start Area FavIcon -->
     <link rel="apple-touch-icon" sizes="180x180" href="IMG/Favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="IMG/Favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="IMG/Favicon/favicon-16x16.png">
     <!--//! End Area FavIcon -->
      
   
 
</head>
<body id="Local_Curso_info">
    
 
  <!-- //! Start Area Menu de Navegação -->
  <?php
      include "../ProjetoFinal/Layout/head.php";
   ?>
  <!-- //! End Area Menu de Navegação -->


    <section class="row  mt-5 mb-4">
          <div class="title col-12 text-center">
            <h2 class=" text-center title ">Matrículas</h2>
          </div>
     </section>
     <div class="container mb-lg-5 mb-2"><hr></div>

     <section class="mx-md-5 mx-1" id="area_texto">
        <article>
            <p class="mb-4 mb-lg-3"> 
              As matrículas estarão abertas no final de Julho para todas as classes.
              
            </p>
            
            <p class="mb-4 mb-lg-3">Os requisitos para efetuação da Matrícula são:</p>

            <ul class="mb-3 mb-lg-5">
            
            <li>B.I ou Passaporte</li>
            <li>Doze Fotográfia</li>
            <li>Cartão de Vacina </li>
            <li>Certificado da Escola Anterior</li>
            <li>Confirmação da Matrícula: 11.500kz</li>
            <li>Custo do Cartão: 4500kz</li>

            </ul>

            <p><h2>NOTA: </h2>O Colégio Alpega já faz Matrículas Online, <a href="matriculasOnline.php">saiba mais</a>.</p>
        </article>
     </section>

       <!--//! Start Area Footer-->
       <?php include "../ProjetoFinal/Layout/Footer.php"; ?>

       <!--//! End Area Footer-->


     




</body>