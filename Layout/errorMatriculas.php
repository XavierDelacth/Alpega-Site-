

    <div class="container-fluid">
      <div class="row">
        <div class="offset-3 col-6 text-center">


            <?php if(!empty($error_sms) && ($_SERVER["REQUEST_METHOD"] == "POST")): ?>
              <div class="alert alert-danger">
                <?php 
                echo $error_sms; 

                ?>
              </div>
            <?php endif; ?>

            <?php if(!empty($success_sms) && ($_SERVER["REQUEST_METHOD"] == "POST")): ?>
              
              <div class="alert alert-success">
                <?php 
                 echo $success_sms."<br>";
                 echo "<a href=screen.php>Certificado</a>";
                 
                 
            
                 ?>
              </div>
      
                           
            <?php endif; ?>

        </div>
      </div>
    </div>