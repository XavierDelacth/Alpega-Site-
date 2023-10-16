
<?php 

session_start();

if(isset($_SESSION["Username"]) && isset($_SESSION["userPassword"])){
  




?>



<?php

    


    if($_SERVER["REQUEST_METHOD"] == "GET"){
        
        if(isset($_GET["id"])){

            $paramsGET = array(
            ":id" => $_GET["id"]
            );

            include "../ProjetoFinal/Gestor/query.php";

            $gestor = new Gestor;
            $resultado = $gestor->EXE_QUERY("SELECT * FROM matricula_online_all WHERE ID = :id ", $paramsGET);

            $message = null;
            for($index = 0; $index < count($resultado); $index++){

                $params = array(
                    ":nome" => $resultado[$index]["Nome_Aluno"],
                    ":bi" => $resultado[$index]["BI"],
                    ":n_pai" => $resultado[$index]["Nome_Pai"],
                    ":n_mae" => $resultado[$index]["Nome_Mae"],
                    ":matricula" => $resultado[$index]["Matricula"],
                    ":curso" => $resultado[$index]["Curso"],
                    ":dt_Nas" => $resultado[$index]["Data_Nascimento"],
                    ":telefone" => $resultado[$index]["Telefone"]
                );

                if($resultado[$index]["Classe"] == 10){
                    $paramsFind = array(
                        ":bi_Find" => $resultado[$index]["BI"]
                    );
                    $find = $gestor->EXE_QUERY("SELECT * FROM decima_all WHERE BI = :bi_Find",$paramsFind);
                    if(count($find)== 0){
                        $gestor->EXE_NON_QUERY("INSERT INTO decima_all(Nome_Aluno,BI,Nome_Pai,Nome_Mae, Matricula,Curso,Data_Nascimento,Telefone) 
                        VALUES(:nome,:bi,:n_pai,:n_mae,:matricula,:curso,:dt_Nas,:telefone)" ,$params);
                        
                        $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $paramsGET);
                        break;
                    }
                    else{
                        $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $paramsGET);
                        break;
                    }
                    
                }
                if($resultado[$index]["Classe"] == 11){
                    $paramsFind = array(
                        ":bi_Find" => $resultado[$index]["BI"]
                    );
                    $find = $gestor->EXE_QUERY("SELECT * FROM decima_primeira_classe_all WHERE BI = :bi_Find",$paramsFind);
                    if(count($find) == 0){
                        $gestor->EXE_NON_QUERY("INSERT INTO decima_primeira_classe_all(Nome_Aluno,BI,Nome_Pai,Nome_Mae,Matricula,Curso,Data_Nascimento,Telefone) 
                        VALUES(:nome,:bi,:n_pai,:n_mae,:matricula,:curso,:dt_Nas,:telefone)" ,$params); 
                        
                        $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $paramsGET);
                        break;
                    } else{
                        $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $paramsGET);
                        break;
                    }
                }
                if($resultado[$index]["Classe"] == 12 ){
                    $paramsFind = array(
                        ":bi_Find" => $resultado[$index]["BI"]
                    );
                    $find = $gestor->EXE_QUERY("SELECT * FROM decima_segunda_classe_all WHERE BI = :bi_Find",$paramsFind);
                    if(count($find) == 0){
                        $gestor->EXE_NON_QUERY("INSERT INTO decima_segunda_classe_all(Nome_Aluno,BI,Nome_Pai,Nome_Mae, Matricula,Curso,Data_Nascimento,Telefone) 
                        VALUES(:nome,:bi,:n_pai,:n_mae,:matricula,:curso,:dt_Nas,:telefone)" ,$params); 
                        
                        $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $paramsGET);
                        break;
                    } else{
                        $gestor->EXE_NON_QUERY("DELETE FROM matriculas_online_all WHERE ID = :id", $paramsGET);
                        break;
                    }
                   
                }
                if($resultado[$index]["Classe"] == 13){ 
                    $paramsFind = array(
                    ":bi_Find" => $resultado[$index]["BI"]
                    );
                    $find = $gestor->EXE_QUERY("SELECT * FROM decima_terceira_classe_all WHERE BI = :bi_Find",$paramsFind);
                    if(count($find) == 0){
                    $gestor->EXE_NON_QUERY("INSERT INTO decima_terceira_classe_all(Nome_Aluno,BI,Nome_Pai,Nome_Mae,Matricula,Curso,Data_Nascimento,Telefone) 
                       VALUES(:nome,:bi,:n_pai,:n_mae,:matricula,:curso,:dt_Nas,:telefone)" ,$params); 

                        $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $paramsGET);
                        break;
                    } else{
                        $gestor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE ID = :id", $paramsGET);
                        break;
                    }

                }

                 
            }
         


        }
        if(isset($_GET["d"])){
            include "../ProjetoFinal/Gestor/query.php";
    
                $gestor = new Gestor();

                $params_delete = array(
                    ":id_10" => $_GET["d"]
                );
                
                $gestor->EXE_NON_QUERY("DELETE FROM decima_all WHERE ID = :id_10", $params_delete);
                
        }

        if(isset($_GET["d_p"])){
            include "../ProjetoFinal/Gestor/query.php";
    
            $gestor = new Gestor();

            $params_delete = array(
                ":id_11" => $_GET["d_p"]
            );
            
            $gestor->EXE_NON_QUERY("DELETE FROM decima_primeira_classe_all WHERE ID = :id_11", $params_delete);
        }
     
        if(isset($_GET["d_s"])){
           
            include "../ProjetoFinal/Gestor/query.php";
    
                $gestor = new Gestor();

                $params_delete = array(
                    ":id_12" => $_GET["d_s"]
                );
                
                $gestor->EXE_NON_QUERY("DELETE FROM decima_segunda_classe_all WHERE ID = :id_12", $params_delete);
                
        }

        if(isset($_GET["d_t"])){
            include "../ProjetoFinal/Gestor/query.php";
    
            $gestor = new Gestor();

            $params_delete = array(
                ":id_13" => $_GET["d_t"]
            );
            
            $gestor->EXE_NON_QUERY("DELETE FROM decima_terceira_classe_all WHERE ID = :id_13", $params_delete);
        }
       
           
    }

    


?>

 

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADM</title>

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


     <!--//! Start Area FavIcon -->
     <link rel="apple-touch-icon" sizes="180x180" href="IMG/Favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="IMG/Favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="IMG/Favicon/favicon-16x16.png">
     <!--//! End Area FavIcon -->
      
   
 
</head>


<body class="bodyCadastrados"> 
    <?php include "../ProjetoFinal/Layout/head_ADM.php";?>

    <section class="row  mt-5 mb-5">
        <div class="title col-12 text-center mb-2">
        <a class="btn btn-primary mx-2 px-5" href="?p=10"> 10ª</a>
        <a class="btn btn-success mx-2 px-5" href="?p=11" >11ª</a>
        <a  class="btn btn-danger mx-2 px-5"  href="?p=12">12ª</a>
        <a class= "btn btn-secondary mx-2 px-5" href="?p=13" >13ª</a>
        </div>
        <hr>
    </section>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "GET"){
            if(isset($_GET["p"])){
               
                if($_GET["p"] == "10"){
            
                    include "../ProjetoFinal/Gestor/query.php";

                    $gestor = new Gestor();

                    $adm = $gestor->EXE_QUERY("SELECT * FROM decima_all");

                    echo "<div class='container mt-lg-5'>
                    
                    <section classe='row ' >
                        <div class='col-lg-12 text-center title_tabels'> ".$_GET['p']."ª Classe</div>
                    </section>

                    <table class='table margem-all mt-4'>

                    <thead>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>BI</th>
                        <th scope='col'>Matrícula</th>
                        <th scope='col'>Curso</th>
                        <th scope='col'>Data de Nascimento</th>
                        <th scope='col'>Telefone</th>
                        
                        <th scope='col'>Operações</th>

                    </thead>";

                    if($adm != 0){
                        for($index = 0; $index < count($adm); $index++){
                            
                            $id = $adm[$index]["ID"];
                            $nome = $adm[$index]["Nome_Aluno"];
                            $bi = $adm[$index]["BI"];
                            $matricula = $adm[$index]["Matricula"];
                            $curso = $adm[$index]["Curso"];
                            $telefone = $adm[$index]["Telefone"];
                            $data_Nas = $adm[$index]["Data_Nascimento"];

                        

                            echo "
                          

                                <tr>
                                <th scope='row'>$id</th>
                                <td>$nome</th>
                                <td>$bi</th>
                                <td>$matricula</th>
                                <td>$curso</th>
                                <td>$data_Nas</th>
                                <td>$telefone</th>
                            
                                <td>
                                <a href='tabelaMatriculados.php?d=".$id."' class='btn btn-danger text-white'>Deletar</a> 

                                <a href='tabelaMatriculados.php?' class='btn btn-success text-white'> Excel </a>
                                
                                </td>
                                
                            
                            ";

                        }
                    }
                    
                }
                if($_GET["p"] == "11"){
                    include "../ProjetoFinal/Gestor/query.php";

                    $gestor = new Gestor();

                    $adm = $gestor->EXE_QUERY("SELECT * FROM decima_primeira_classe_all");
                    echo "<div class='container mt-lg-5'>
                    <table class='table mb-5'>
                    <section classe='row ' >
                    <div class='col-lg-12 text-center title_tabels'> ".$_GET['p']."ª Classe</div>
                     </section>
                    <thead>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>BI</th>
                        <th scope='col'>Matrícula</th>
                        <th scope='col'>Curso</th>
                        <th scope='col'>Data de Nascimento</th>
                        <th scope='col'>Telefone</th>
                        
                        <th scope='col'>Operações</th>

                    </thead>";

                    if($adm != 0){
                        for($index = 0; $index < count($adm); $index++){
                            
                            $id = $adm[$index]["ID"];
                            $nome = $adm[$index]["Nome_Aluno"];
                            $bi = $adm[$index]["BI"];
                            $matricula = $adm[$index]["Matricula"];
                            $curso = $adm[$index]["Curso"];
                            $telefone = $adm[$index]["Telefone"];
                            $data_Nas = $adm[$index]["Data_Nascimento"];

                        

                            echo "
                           

                                <tr>
                                <th scope='row'>$id</th>
                                <td>$nome</th>
                                <td>$bi</th>
                                <td>$matricula</th>
                                <td>$curso</th>
                                <td>$data_Nas</th>
                                <td>$telefone</th>
                            
                                <td>
                                <a href='tabelaMatriculados.php?d_p=".$id."' class='btn btn-danger text-white'>Deletar</a> 
                                <a href='tabelaMatriculados.php?' class='btn btn-success text-white'> Excel </a>
                                
                                </td>
                                
                            
                            ";

                        }
                    }
                
                }
                if($_GET["p"] == "12"){
                    include "../ProjetoFinal/Gestor/query.php";

                    $gestor = new Gestor();

                    $adm = $gestor->EXE_QUERY("SELECT * FROM decima_segunda_classe_all");
                    
                    echo "<div class='container mt-lg-5'>
                    <section classe='row ' >
                    <div class='col-lg-12 text-center title_tabels'> ".$_GET['p']."ª Classe</div>
                    </section>
                    <table class='table mb-5'>

                    <thead>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>BI</th>
                        <th scope='col'>Matrícula</th>
                        <th scope='col'>Curso</th>
                        <th scope='col'>Data de Nascimento</th>
                        <th scope='col'>Telefone</th>
                        
                        <th scope='col'>Operações</th>

                    </thead>";

                    if($adm != 0){
                        for($index = 0; $index < count($adm); $index++){
                            
                            $id = $adm[$index]["ID"];
                            $nome = $adm[$index]["Nome_Aluno"];
                            $bi = $adm[$index]["BI"];
                            $matricula = $adm[$index]["Matricula"];
                            $curso = $adm[$index]["Curso"];
                            $telefone = $adm[$index]["Telefone"];
                            $data_Nas = $adm[$index]["Data_Nascimento"];

                        

                            echo "
                            

                                <tr>
                                <th scope='row'>$id</th>
                                <td>$nome</th>
                                <td>$bi</th>
                                <td>$matricula</th>
                                <td>$curso</th>
                                <td>$data_Nas</th>
                                <td>$telefone</th>
                            
                                <td>
                                <a href='tabelaMatriculados.php?d_s=".$id."' class='btn btn-danger text-white'>Deletar</a> 
                                <a href='tabelaMatriculados.php?' class='btn btn-success text-white'> Excel </a>
                                
                                
                                </td>
                                
                            
                            ";

                        }
                    }
                }if($_GET["p"] == "13"){
                    include "../ProjetoFinal/Gestor/query.php";

                    $gestor = new Gestor();

                    $adm = $gestor->EXE_QUERY("SELECT * FROM decima_terceira_classe_all");
                    echo "<div class='container mt-lg-5'>
                    <section classe='row ' >
                    <div class='col-lg-12 text-center title_tabels'> ".$_GET['p']."ª Classe</div>
                    </section>
                    <table class='table mb-5'>

                    <thead>
                        <th scope='col'>ID</th>
                        <th scope='col'>Nome</th>
                        <th scope='col'>BI</th>
                        <th scope='col'>Matrícula</th>
                        <th scope='col'>Curso</th>
                        <th scope='col'>Data de Nascimento</th>
                        <th scope='col'>Telefone</th>
                        
                        <th scope='col'>Operações</th>

                    </thead>";

                    if($adm != 0){
                     

                        for($index = 0; $index < count($adm); $index++){
                            
                            $id = $adm[$index]["ID"];
                            $nome = $adm[$index]["Nome_Aluno"];
                            $bi = $adm[$index]["BI"];
                            $matricula = $adm[$index]["Matricula"];
                            $curso = $adm[$index]["Curso"];
                            $telefone = $adm[$index]["Telefone"];
                            $data_Nas = $adm[$index]["Data_Nascimento"];

                        

                            echo "
                          
                                <tr>
                                <th scope='row'>$id</th>
                                <td>$nome</th>
                                <td>$bi</th>
                                <td>$matricula</th>
                                <td>$curso</th>
                                <td>$data_Nas</th>
                                <td>$telefone</th>
                            
                                <td>
                                <a href='tabelaMatriculados.php?d_t=".$id."' class='btn btn-danger text-white'>Deletar</a> 
                                <a href='tabelaMatriculados.php?' class='btn btn-success text-white'> Excel </a>
                                
                                </td>
                                
                            
                            ";

                        }
                    }
                }


                
                 
                




             }
        }
    
    
    ?>
   


























<?php include "../ProjetoFinal/Layout/footerMatriculados.php"; ?>





    <!--//! Start Bootstrap Script -->
            
    <script src="./assets/Bootstrap/JS/jquery.slim.min.js"></script>
    <script src="./assets/Bootstrap/JS/popper.min.js"></script>
    <script src="./assets/Bootstrap/JS/bootstrap.min.js"></script>
           
    
    <!--//! End Bootstrap Script -->



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