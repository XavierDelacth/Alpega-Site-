<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados dos Alunos</title>

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
      <link rel="stylesheet" href="./CSS/screen.css">
       <!--//! End Area CSS -->


     <!--//! Start Area FavIcon -->
     <link rel="apple-touch-icon" sizes="180x180" href="IMG/Favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="IMG/Favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="IMG/Favicon/favicon-16x16.png">
     <!--//! End Area FavIcon -->
</head>
<body>
    


  <?php 
       include "./Gestor/query.php";
       $gestor = new Gestor();

       $dadosBD = $gestor->EXE_QUERY("SELECT * FROM matricula_online_all");
       
       if(count($dadosBD) != 0){
        $index = count($dadosBD);
        $id = $dadosBD[$index-1]["ID"];
        $nome = $dadosBD[$index-1]["Nome_Aluno"];
        $bi = $dadosBD[$index-1]["BI"];
        $matricula = $dadosBD[$index-1]["Matricula"];
        $classe = $dadosBD[$index-1]["Classe"];
        $curso = $dadosBD[$index-1]["Curso"];
        $telefone = $dadosBD[$index-1]["Telefone"];
        $dt_Cadastro = $dadosBD[$index-1]["Data_Cadastro"];

       
        echo "
          
        <section id='printChoice' class='container mb-5'>

        <div class='text-center p-3 '><img src='./IMG/Logotipo/printLogo.png' alt='Logo' class='printLOGO'> </div>

        <div class='row'>
          <div class='col-md-12 mb-4'>
            <h3 class='text-center p-3 title_print'> Recibo da efetuação da Mátricula Online</h3>

          </div>


          <div class='col-md-5 col-12 nomeAluno text-center' id='containerValue'> Nome: $nome </div>
           
         
          <div class='col-md-4 col-12 text-center' id='containerValue'>Número do BI: $bi</div>
          
          <div class='col-md-2 col-12 text-center' id='containerValue'>ID: $id</div>
            
          
          <div class='col-md-3 col-12  text-center' id='containerValue'>Matrícula: $matricula</div>
            <div class='col-md-3 col-12  text-center' id='containerValue'>Curso: $curso</div>
            <div class='col-md-3 col-12  text-center' id='containerValue'>Classe: $classe</div>
            <div class='col-md-3 col-12  text-center' id='containerValue'>Telefone: $telefone</div>
            <div class='col-md-4 col-12  text-center' id='containerValue'>Data de cadastro: $dt_Cadastro</div>
        </div>
          <div class='col-md-12 col-12 mt-4 text-center text-warning sms-success' >
          Usuário Cadastro com sucesso!
          </div>

          </div>

          <div class='button' id='buttonArea'>
          <a class='btn btn-success print btn-print' onclick='printB.call()'>Print</a>
          <a href='index.php' class='btn btn-primary inicial'>Página Inicial</a>
          </div>
        


        </section>


        ";
       }
  
          ?>


    

      <!--//! Start Bootstrap Script -->
            
            <script src="./assets/Bootstrap/JS/jquery.slim.min.js"></script>
            <script src="./assets/Bootstrap/JS/popper.min.js"></script>
            <script src="./assets/Bootstrap/JS/bootstrap.min.js"></script>
           
    
        <!--//! End Bootstrap Script -->



            <!--//! Start JavaScript -->
           
                        
              <script src="/JS/main.js"></script>
              <script src="/JS/Counter.js"></script>
              <script src="/JS/print.js"></script>

              
              
              
            <!--//! End JavaScript -->
</body>
</html>