
  <?php include "../ProjetoFinal/PHP/serverCadastro.php";?>






<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriculas Online </title>


   
    <!-//$ Start Area GOOGLE Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap?vm=<?php echo time(); ?>" rel="stylesheet">
    <!--//$  End Area GOOGLE Fonts -->

 
    <!--//$  Start Area Bootstrap -->
    <link rel="stylesheet" href="./assets/Bootstrap/CSS/bootstrap.min.css">

    <!--//$  End Area Bootstrap -->


      <!--//$  Start Area Font Awesome -->
      <link rel="stylesheet" href="./assets/fontawesome-free-6.0.0-web/css/all.css">
      <!--//$  End Area Font Awesome -->

      <!--//$  Start Area CSS -->
      <link rel="stylesheet" href="./CSS/custon.css">
      <link rel="stylesheet" href="./CSS/Query.css">
      <link rel="stylesheet" href="./CSS/config.css">
      <link rel="stylesheet" href="./CSS/matriculaspage1.css">
      <!--//$  End Area CSS -->


     <!--//$  Start Area FavIcon -->
      <link rel="apple-touch-icon" sizes="180x180" href="IMG/Favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="IMG/Favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="IMG/Favicon/favicon-16x16.png">
     <!--//$  End Area FavIcon -->


    
    
    
    
</head>
<body id="Local_Curso_info">
 

  <!-- //! Start Area Menu de Navegação -->
  <?php
      include "../ProjetoFinal/Layout/head.php";
   ?>
  <!-- //! End Area Menu de Navegação -->


      <section class="row  mt-5 mb-4">
          <div class="title col-12 text-center title">
              <h2 class="text-center title ">Matrículas Online</h2>
          </div>
     </section>
     <div class="container mb-lg-5 mb-2"><hr></div>

    
    <menu >
      <aside>
        A opção de Matrícula Online não substitui a Matrícula Normal, pois ainda ficam em falta alguns documentos como certificado da colégio anterior.
        Essa ferramente é na verdade um reserva de vaga, logo , em 10 dias sem a confirmação dos documentos com BI, Certificado , Fotográfias, a sua vaga será eliminada do nosso banco de Dados.
        Após o cadastro com sucesso o usuário deverá seguir o link do Certificado Digital, e será apresentado na hora da confirmação presencial.
      </aside>
      <p class="mb-4 mb-lg-3">Os requisitos para efetuação da Matrícula Online são:</p>
      <ul>
        <li>Nome Completo</li>
        <li>B.I</li>
        <li>Data Emissão do BI</li>
        <li>Data de Nascimento</li>
        <li>Nome Pai</li>
        <li>Nome Mãe</li>
        <li>Classe</li>
        <li>Curso</li>
        <li>Telefone</li>
        <li>Confirmação da Matrícula ou Primeira Inscrição</li>


      </ul>
    </menu>

    


    <?php include "../ProjetoFinal/Layout/errorMatriculas.php";?> 
    
    
    <div class="container-fluid">
      <div class="row">
        <div class="offset-3 col-6 text-center ">
        <div class="localerror alert " >
            
        </div>

        </div>
      </div>
    </div>

    <section id="choiceCurso" class="container mb-5">

      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center p-3 title"> Reserva já a sua vaga!</h3>

        </div>
      </div>
       
      <form class="row g-3 " method="post" id="form" action="?p=matriculasOnline" >

      <input type="hidden" name="matriculas" value="online">

      <div class="col-md-6">
        <label  class="form-label">Nome Completo</label>
        <input type="text" class="form-control" name="nomeAluno" id="nomeAluno_id"  required >
       
      </div>

      <div class="col-md-3">
        <label  class="form-label">Nº do BI </label>
        <input type="text" class="form-control"  name="biAluno" id="biAluno_id"  >
      
      </div>  

      <div class="col-md-3">
        <label class="form-label">Data Emissão do BI</label>
        <input type="date" class="form-control" name="dataEmissao" id="dataEmissao_id" min="2017-07-23" max="2023-12-31">
      </div>

      <div class="col-md-5">
        <label  class="form-label">Nome do Pai</label>
        <input type="text" class="form-control" name="paiAluno" id="paiAluno_id" required>

      </div>
      
      <div class="col-md-5">
        <label  class="form-label">Nome da Mãe</label>
        <input type="text" class="form-control" name="mae_Aluno" id="mae_Aluno_id"   required>
      </div>  

      <div class="col-md-2">
        <label  class="form-label">Data de Nascimento</label>
        <input type="date" class="form-control" name="dataNascimento" id="dataNascimentos_id" max="2008-12-31">

      </div>

      <div class="col-md-4">
        <label  class="form-label"> Matrícula </label>
        <select class="form-control" name="alunoMatri" id="alunoMatri_id">
              <option value="nenhum" select>Escolha...</option>
              <option value="Primeira Vez">Primeira Matrícula</option>
              <option value="Confirmação">Confirmação da Matrículas</option>
        </select>
      </div>

      <div class="col-md-4">
        <label  class="form-label">Curso</label>
        <select class="form-control" name="alunoCurso" id="alunoCurso_id">
          <option value="nenhum" select>Escolha...</option>
          <option value="Enfermagem">Enfermagem</option>
          <option value="Informática">Informática</option>
          <option value="Direito">Direito</option>
          <option value="Administração e Gestão Empresarial">Administração e Gestão Empresarial</option>
          <option value="Contabilidade e Gestão Financeira">Contabilidade e Gestão Financeira</option>
          <option value="Recursos Humanos">Recursos Humanos</option>

        </select>

      </div>

      <div class="col-md-4">
      <label  class="form-label">Classe</label>

      <select name="anoEstudante" id="anoEstudante_id" class="form-control">

      <option value="nenhum">Escolha...</option>
       <option value="10">10ª</option>
       <option value="11">11ª</option>
       <option value="12">12ª</option>
       <option value="13">13ª</option>
        
      </select>

      </div>

      <div class="col-md-6">
        <label  class="form-label">Numero de Telefone </label>
        <input type="tel" class="form-control" id="numero_id" name="numeroAluno" required title="O numero deve conter 9 números" minlength="9"  pattern="[0-9]{9}">
      </div>

      <div class="col-md-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="invalidCheck" title="O Cadastro é válido até 10 dias" required>
      <label class="form-check-label " for="invalidCheck">
      Concorde com termos e condições
      </label>
      
    </div>
  </div>


      <div class="col-12">
      <button class="btn btn-primary"  type="submit" id="submit" >Reservar!</button>
      </div>
     
      

      </form>

      
    </section>

   




    <!--//! Start Area Footer-->
     <?php include "../ProjetoFinal/Layout/Footer.php"; ?>

<!--//! End Area Footer-->













    <!--//!  Start Area de JavaScript -->
        <script src="./JS/Validacoes.js"></script>

     <!--//!  End Area de JavaScript -->
 
      

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