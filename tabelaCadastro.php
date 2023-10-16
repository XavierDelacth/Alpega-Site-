


<?php 

session_start();

if(isset($_SESSION["Username"]) && isset($_SESSION["userPassword"])){
  




?>


    <?php
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET["delete"])){
                include "../ProjetoFinal/Gestor/query.php";
    
                $gestor = new Gestor();

                $params_delete = array(
                    ":id" => $_GET["delete"]
                );
                
                $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $params_delete);
                header("Location: http://projetofinal.test/tabelaCadastro.php");
            }
        }

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Confidênciais</title>

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
<body class="bodyCadastrados" >
    <?php include "../ProjetoFinal/Layout/head_ADM.php";?>
    
<div class="container-fluid mt-lg-5 mb-5 pb-5">
<table class="table mb-5">

<thead>
    <th scope="col">ID</th>
    <th scope="col">Nome</th>
    <th scope="col">BI</th>
    <th scope="col">Matrícula</th>
    <th scope="col">Classe</th>
    <th scope="col">Curso</th>
    <th scope="col">Telefone</th>
    <th scope="col">Data de Cadastro</th>
    <th scope="col">Operações</th>

</thead>

<tbody>

    <?php 
        include "../ProjetoFinal/Gestor/query.php";

        $gestor = new Gestor();

        $adm = $gestor->EXE_QUERY("SELECT * FROM matricula_online_all");

        if($adm != 0){
            for($index = 0; $index < count($adm); $index++){
                
                $id = $adm[$index]["ID"];
                $nome = $adm[$index]["Nome_Aluno"];
                $bi = $adm[$index]["BI"];
                $matricula = $adm[$index]["Matricula"];
                $classe = $adm[$index]["Classe"];
                $curso = $adm[$index]["Curso"];
                $telefone = $adm[$index]["Telefone"];
                $dt_Cadastro = $adm[$index]["Data_Cadastro"];

                echo "
                    <tr>
                    <th scope='row'>$id</th>
                    <td>$nome</th>
                    <td>$bi</th>
                    <td>$matricula</th>
                    <td>$classe</th>
                    <td>$curso</th>
                    <td>$telefone</th>
                    <td>$dt_Cadastro</th>
                    <td>
                    <a href='tabelaCadastro.php?delete=".$id."' class='btn btn-danger text-white'>Deletar</a> 
                    <a href='tabelaMatriculados.php?id=".$id."' class='btn btn-success'> Confirmar </a>
                    </td>
                    
                
                ";

            }
        }else{
           

        }
        
    
    ?>

</tbody>





</table>
</div>


<?php include "../ProjetoFinal/Layout/footerMatriculados.php"; ?>





      <!--//! Start Bootstrap Script -->
            
            <script src="./assets/Bootstrap/JS/jquery.slim.min.js"></script>
            <script src="./assets/Bootstrap/JS/popper.min.js"></script>
            <script src="./assets/Bootstrap/JS/bootstrap.min.js"></script>
           
    
             <!--//!End Bootstrap Script -->



            <!--//! Start JavaScript -->
           
              
           
              <script src="/JS/main.js"></script>
              <script src="/JS/Counter.js"></script>
          
              
              
            <!--//! End JavaScript -->

    
</body>
</html>

<?php 
}else{
  header("Location:Administrador.php");
}

?>