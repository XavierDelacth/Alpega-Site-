<?php
  $searching = true;
    
   
    while($searching){
        
        include "./Gestor/query.php";
        $deletor = new Gestor();
   
        

        $deletor->EXE_NON_QUERY("DELETE FROM matricula_online_all WHERE datediff(now(),Data_Cadastro) > 10");
       
      
     



        $searching = false;
    



    }

    ?>