
<?php



if($_SERVER["REQUEST_METHOD"] == "POST"){
  $error_sms = "";
  $success_sms = "";
  
  if($_POST["matriculas"] == "online"){
    

      if( !isset($_POST["nomeAluno"]) || !isset($_POST["paiAluno"])  || !isset($_POST["mae_Aluno"]) || !isset($_POST["biAluno"]) || !isset($_POST["dataEmissao"])
        || !isset($_POST["dataNascimento"]) || !isset($_POST["alunoMatri"]) || !isset($_POST["alunoCurso"]) || !isset($_POST["anoEstudante"]) || !isset($_POST["numeroAluno"])) 
      {
        
        die("Esses Campos Não Existem.");
      }

      if( empty($_POST["nomeAluno"]) || empty($_POST["mae_Aluno"]) || empty($_POST["paiAluno"]) ||  empty($_POST["biAluno"]) ||  empty($_POST["dataEmissao"])
      || empty($_POST["dataNascimento"]) || empty($_POST["alunoMatri"]) || empty($_POST["alunoCurso"]) || empty($_POST["anoEstudante"]) || empty($_POST["numeroAluno"])){
        die("Algum Campo Está Vazio");
      }

      if( strlen($_POST["nomeAluno"] ) < 3 || strlen($_POST["mae_Aluno"]) < 3 || strlen($_POST["paiAluno"]) < 3 || strlen($_POST["numeroAluno"]) < 9 || strlen($_POST["biAluno"]) < 3){
        die("Os valores imbutidos nos campos não podem ser menores que 3 dígitos ");
    }
    if( strlen($_POST["nomeAluno"] ) >50 || strlen($_POST["mae_Aluno"]) >50 || strlen($_POST["paiAluno"]) >50 || strlen($_POST["numeroAluno"]) > 9 || strlen($_POST["biAluno"]) < 14){
      die("Os valores imbutidos nos campos não podem ser maiores que 50 dígitos ");
    }
    
    include "../ProjetoFinal/Gestor/query.php";
    
     $gestor = new Gestor();

     $paramsFind_N = array(
      ":nomeUSERS" => $_POST["nomeAluno"]
    
    );
    $paramsFind_BI = array(
      ":biUSERS" => $_POST["biAluno"]
    );
    $resultado1 = $gestor->EXE_QUERY("SELECT Nome_Aluno FROM matricula_online_all WHERE Nome_Aluno = :nomeUSERS",  $paramsFind_N);
    $resultado = $gestor->EXE_QUERY("SELECT BI FROM matricula_online_all WHERE BI = :biUSERS", $paramsFind_BI);

   if( count($resultado) != 0 || count($resultado1) != 0){

    if(count($resultado1) != 0){
      $error_sms = "Erro.., O ".$_POST["nomeAluno"]." já foi Cadastrado!";
      }
    if(count($resultado) != 0){
      $error_sms = "Erro.., O ".$_POST["biAluno"]." já foi Cadastrado!";
     }   
   
  }else{
    $success_sms = "Cadastrado com Sucesso!";
    $biCadastrado = null;
    $biCadastrado = $_POST["biAluno"];
    $params = Array(
      ":nome" => $_POST["nomeAluno"],
      ":pai" => $_POST["paiAluno"],
      ":mae" => $_POST["mae_Aluno"],
      ":bi" => $_POST["biAluno"],
      ":telefone" => $_POST["numeroAluno"],
      ":naciona" => $_POST["alunoMatri"],
      ":classe" => $_POST["anoEstudante"],
      ":curso" => $_POST["alunoCurso"],
      ":dataNas" => $_POST["dataNascimento"],
      "dataEmi" => $_POST["dataEmissao"]
     );

     
   
      $gestor->EXE_NON_QUERY("INSERT INTO matricula_online_all(Nome_Aluno, Nome_Pai, Nome_Mae, BI, Telefone , Matricula, Classe, Curso, Data_Nascimento, Data_Emissao) 
          VALUES(:nome, :pai, :mae, :bi, :telefone, :naciona, :classe, :curso, :dataNas, :dataEmi)",$params);
     
  }



   

       
     



  
 
  }
}

?>
