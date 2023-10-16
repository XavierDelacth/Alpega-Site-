
  <?php
    
        
          
          if($_SERVER["REQUEST_METHOD"] == "POST"){
            $error_sms = "";
            $success_sms = "";
            if(isset($_POST["login"])){
              session_start();
               
             include "../ProjetoFinal/Gestor/query.php";
  
              $gestor = new Gestor(); 
              
              $params = array(
              ":userName" => $_POST["usuario"],
              ":userSenha" => $_POST["senha"]
              );    
              $resultadoFind = $gestor->EXE_QUERY("SELECT * FROM login_adm_all WHERE Username = :userName AND userPassword = :userSenha", $params);
              
  
              if(count($resultadoFind) != 0){
                $_SESSION["Username"] = $_POST["usuario"];
                $_SESSION["userPassword"] = $_POST["senha"];

                if(isset($_SESSION["Username"])){
                  header("Location:adm.php");
                  exit();
                }
  
              }else{
                $error_sms = " Verifique se o seu nome ou a sua senha estão incorretas";
              }
  
            
  
  
            }
          }
   



  ?>






<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aministrador</title>

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
      <link rel="stylesheet" href="./CSS/login.css">
       <!--//$ End Area CSS -->


     <!--//$ Start Area FavIcon -->
     <link rel="apple-touch-icon" sizes="180x180" href="IMG/Favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="IMG/Favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="IMG/Favicon/favicon-16x16.png">
     <!--//$ End Area FavIcon -->
      
   
 
</head>

<body>
  

      <section class="main-login">
        
         
          <div class="left-login">
            <h1>Faça o seu Login</h1>
            <img src="./IMG/Login/undraw_mobile_user_re_xta4.svg" alt="Imagem de Login" class="img-login" >
            <div>
              <a href="index.php" class="btn btn-primary text-light ">Página Inicial</a>
            </div>
          </div>

          <div class="right-login">
          <?php include "../ProjetoFinal/Layout/errorMatriculas.php";?> 
            <form class="card-login" action="administrador.php" method="POST">
                
              <input type="hidden" name="login">
              <h1>Area Reservada</h1>
              <div class="nomeArea">
                <label for="usuario"> Usuário </label>
                <input type="text" name="usuario" placeholder="nameuser123">
              </div>

              <div class="senhaArea">
                <label for="senha">Senha</label>
                <input type="password" name="senha" placeholder="senhauser123">
              </div>
              <button class="btn-login btn-warning" type="submit" >Login</button>
              


            </form >
            
          </div>
        
      </section>


  


































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