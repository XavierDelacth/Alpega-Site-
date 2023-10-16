<?php include "../ProjetoFinal/PHP/deleteauto.php"; ?> 
  <?php 
    
    session_start();

    if(isset($_SESSION["Username"]) && isset($_SESSION["userPassword"])){
      

  
  
  
  ?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>

    <!--//$ Start Area GOOGLE Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap?vm=<?php echo time(); ?>" rel="stylesheet">
    <!--//$ End Area GOOGLE Fonts -->

 
    <!--//$ Start Area Bootstrap -->
    <link rel="stylesheet" href="./assets/Bootstrap/CSS/bootstrap.min.css">
    <!--//$ End Area Bootstrap -->

      <!--//$ Start Area Font Awesome -->
      <link rel="stylesheet" href="./assets/fontawesome-free-6.0.0-web/css/all.css">
      <!--//$ End Area Font Awesome -->

      <!--//$ Start Area CSS -->
      <link rel="stylesheet" href="./CSS/custon.css">
      <link rel="stylesheet" href="./CSS/Query.css">
      <link rel="stylesheet" href="./CSS/config.css">
      <link rel="stylesheet" href="./CSS/matriculaspage1.css">
    
       <!--//$ End Area CSS -->


     <!--//$ Start Area FavIcon -->
     <link rel="apple-touch-icon" sizes="180x180" href="IMG/Favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="IMG/Favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="IMG/Favicon/favicon-16x16.png">
     <!--//$ End Area FavIcon -->
      
   
 
</head>

<body>

     <?php include "../ProjetoFinal/Layout/head_ADM.php"?> 

     <body id="Local_Curso_info">
    <section class="row  mt-5 mb-5">
          <div class="title col-12 text-center title">
            <h1 class=" text-center title">Seja Bem-Vindo</h1>

          </div>
     </section>

    <section class="mb-lg-4 mb-3">
        <div class="title col-12 text-center " >
            <h2 class=" text-center title">Reservado para Administradores do Colégio ALPEGA</h2>

          </div>
    </section> 
    
    <section id="flexButton">
      
          <a class="btn btn-danger " href="../PHP/logout.php">Logout</a>

        
        </div>
    </section>



    <?php include "../ProjetoFinal/Layout/footerMatriculados.php"; ?>













      <!--//$ Start Bootstrap Script -->
            
      <script src="./assets/Bootstrap/JS/jquery.slim.min.js"></script>
            <script src="./assets/Bootstrap/JS/popper.min.js"></script>
            <script src="./assets/Bootstrap/JS/bootstrap.min.js"></script>
           
    
             <!--//$End Bootstrap Script -->



            <!--//$ Start JavaScript -->
           
              
           
              <script src="/JS/main.js"></script>
              <script src="/JS/Counter.js"></script>

              
              
              
            <!--//$ End JavaScript -->

</body>
</html>

<?php 
}else{
  header("Location:Administrador.php");
}

?>