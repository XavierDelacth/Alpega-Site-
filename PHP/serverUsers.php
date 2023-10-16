
<?php 

   


if($_SERVER["REQUEST_METHOD"] == "POST"){
  if($_POST["usersContactos"] == "usersContact"){

    $nome_Users = $_POST["nomeUsers"];
    $emailUsers = $_POST["emailUsers"];
    $textoUsers = $_POST["area_texto"];

    include "../ProjetoFinal/Gestor/query.php";

    $gestor = new Gestor();
    
    $params = array(
      ":nome" => $_POST["nomeUsers"],
      ":email" => $_POST["emailUsers"],
      ":texto" => $_POST["area_texto"]

    );

    $admin = $gestor->EXE_QUERY("INSERT INTO users_all(Nome, Email, Info) VALUES(:nome, :email, :texto)", $params);
  
  }
}

?>

