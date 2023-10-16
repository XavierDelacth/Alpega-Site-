
<?php
  include "../ProjetoFinal/PHP/serverUsers.php";
?>

    


<!doctype html>
<html lang="pt">
  <head>
    <!-- //$ Required meta tags -->
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
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
      <!--//! End Area CSS -->


     <!--//! Start Area FavIcon -->
     <link rel="apple-touch-icon" sizes="180x180" href="IMG/Favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="IMG/Favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="IMG/Favicon/favicon-16x16.png">
     <!--//! End Area FavIcon -->
      
   
 
    <title>ALPEGA</title>
  </head>

  <body>

  

    <!-- //! Start Area Informação Rápidas -->
    <section id="info" >
        <summary class="container pt-md-3 pb-md-3 ">
            <article class="row">

                <div class="col-md-6">
                    <nav class="info-text sliga">Escola Técnica de Educação e Saúde Alpega</nav>
                </div>
                <div class="col-md-3 mr-md-2">
                    <nav class="info-text emailCollege"><i class="fa-solid fa-envelope mx-1"></i> escolaalpega@etesal.co.ao</nav>
                </div>
                <div class="col-md-3"> 
                    <nav class="info-text cellCollege"><i class="fa-solid fa-phone mx-1"></i> (+244) 934 361 689</nav>
                </div>
            

            </article>
        </summary>
    </section>
    <!-- //! End Area Informação Rápida -->


   
         <!-- //! Start Area dos Menus de Navegação -->
       <section id="header" >
 
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container" id="listMenu">

                  <!--//! Start Logotipo-->
                  <a class="navbar-brand " href="index.php"><img src="./IMG/Logotipo/logoPreview.png" alt="Logo" class="imgLOGO"> <h3 class="logoName">Escola Técnica de Educação e Saúde Alpega</h3></a>
                  <!--//! End Logotipo-->

                  <!--//! Start Area Botão do hambunger -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                      <i class="fa fa-navicon nonefact" style="color:var(--secundary); font-size:28px;"></i>
                    </span>
                  </button>
                  <!--//! End Area botão do hambunger -->


                  <!--//! Start Area Menu de Navegação-->
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">

                    <!--//! Start Area Lista de linsks de Navegação -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                      <!--//! Start Area Links -->
                      <li class="nav-item">
                        <a class="nav-link active home mood_all" aria-current="page" href="index.php" >Página Inicial</a>
                      </li>

                      <!--//! Start Area Links -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mood_all" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Serviços 
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="s_Matriculas.php">Matrículas</a></li>
                          <li><a class="dropdown-item" href="Estagio.php">Estágio</a></li>
                                                  
                        </ul>

                      </li>


                      <!--//! Start Area Links -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle mood_all" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Cursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Informatica.php">Informática</a></li>
                                   
                            <li><a class="dropdown-item" href="Contabilidade.php">Contabilidade e Gestão Financeira</a></li>
                            <li><a class="dropdown-item" href="AdmiGE.php">Administração e Gestão Empresarial</a></li>
                            <li><a class="dropdown-item" href="Direito.php">Direito</a></li>
            
                            <li><a class="dropdown-item " href="Enfermagem.php" >Enfermagem</a></li> 
                            <li><a href="Recursos.php" class="dropdown-item">Recursos Humanos</a></li>                              
                                                  
            
                          </ul>
                      </li>



                      <!--//! Start Area Links -->
                      <li class="nav-item ">
                          <a href="Contactos.php" class="nav-link mood_all">Contactos</a>
                      </li>
                      
                    </ul>
                    <!--//! End Area Lista de links de Navegação -->


                    <!--//! Start Area de Formulário para o Portal de Matrícula-->
                   
            
                      <a href="./matriculasOnline.php" class="button-sign">Matrículas Online</a>
                  
                    <!--//! Ends Area de Formulário para o Portal de Matrícula -->

                  </div>
                   <!--//! Start Area Menu de Navegação-->


                </div>
              </nav>
   
            </section>

            <!-- //! End Area dos Menus de Navegação -->




           

            <!-- //! Start Area Slider Show-->

            <section id="slider" >
              <menu class="container-fluid " >

                <div id="carouselExampleDark" class="carousel  slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                  </div>

                  <div class="carousel-inner frameT">

                    <div class="carousel-item active carousel-size" data-bs-interval="10000">
                      <img src="./IMG/Novos/Escola-Front2.jpeg" alt=""class="d-block " >
                     
                    </div>

                    <div class="carousel-item carousel-size" data-bs-interval="2000">
                      <img src="./IMG/Novos/Slide1.jpeg" alt="" class="d-block ">
                      
                    </div>

                    <div class="carousel-item carousel-size">
                      <img src="./IMG/Novos/WhatsApp Image 2022-05-16 at 20.53.39.jpeg" alt="" class="d-block ">
                      
                    </div>

                  </div>

                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>

                </div>

              </menu>
            </section>

            <!-- //! End Area Slide Show -->




            
            <!-- //! Start Area About Us-->
              <section id="aboutUs" class="container-fluid ">
                
                <div class="container ">

                  <main class="row ">

                  <div class="col-md-6 text-center align-self-center oder-md-1 order-2 img-container" >
                    <img src="./IMG/About/AboutUS.jpeg" alt="About Us" class=" img-fluid">
                  </div>

                  <div class="col-md-6  align-self-center mb-md-0 mb-4 order-md-2 order-1 areaTxt ">
                    <h2 class="title  mt-md-3 ">Quem Somos</h2>
                    <p class="textAbout ">A ETESAL - Escola Técnica de Educação e Saúde Alpega, fundada em 02 de Julho de 1996, é um Estabelecimento de Ensino Particular Não Superior, vocacionado para ministrar o II Ciclo do Ensino Secundário Geral e Cursos Médios Técnicos Profissionais, nas mais diversas áreas de formação académica vigentes no País e, superiormente, autorizados pelos Ministérios da Educação e da Saúde. A sua actividade escolar, observa e obedece estritamente aos Programas, Planos de Estudos, Calendário Escolar, Regime de Avaliação e demais normas do Sistema de Ensino Vigente em Angola.</p>
                   
                  </div>

                </main>

                </div>

              </section>
            <!-- //! End Area About Us-->












            <!-- //! Start Area Cursos -->
            <section id="areaCursos" class="block">
              <div class="container">
                <h1 class="title text-center">Nossos Cursos</h1>
                <h3 class="subtitle text-center">Todos os Cursos que o Colégio Alpega oferece são Técnicos </h3>
               
                <div class="row">

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 ">
                  <a href="Informatica.php" class="destaque" onmouseover="overImg1.call()" onmouseout="outImg1.call()">
                    <div class="img-container">
                      <img src="./IMG/Curso_N/pair_programming_light.svg" alt="Informática" class="img-fluid img-noneF">
                    </div>
                    <h4 class="title mb-lg-3 mb-1">Informática</h4>
                    <p>Duração do Curso: 4 anos</p>
                    <p>Propina: 23,000KZ com bónus de 2000KZ</p>
                    <p>Cartão de Estudante: 4500KZ</p>
                    <p class="mb-lg-4">Certificado: ETESAL</p>

                  </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0 ">
                  <a href="AdmiGE.php" class="destaque" onmouseover="overImg2.call()" onmouseout="outImg2.call()">
                    <div class="img-container">
                      <img  src="./IMG/Curso_N/pair_finance_light.svg" alt="Gestão" class="img-fluid img-noneG">
                    </div>
                    <h5 class="title">Administração e Gestão Empresarial</h5>
                    <p>Duração do Curso: 4 anos</p>
                    <p>Propina: 23,000KZ com bónus de 2000KZ</p>
                    <p>Cartão de Estudante: 4500KZ</p>
                    <p>Certificado: ETESAL</p>
                  </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <a href="Direito.php" class="destaque" onmouseover="overImg3.call()" onmouseout="outImg3.call()" >
                    <div class="img-container">
                      <img src="./IMG/Curso_N/pair_judge_light.svg" alt="Direito" class="img-fluid img-noneD">
                      
                    </div>
                    <h4 class="title mb-lg-3 mb-1">Direito</h4>
                    <p>Duração do Curso: 4 anos</p>
                    <p>Propina: 23,000KZ com bónus de 2000KZ</p>
                    <p>Cartão de Estudante: 4500KZ</p>
                    <p class="mb-lg-4">Certificado: ETESAL</p>
                  </a>
                </div>

                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                  <a href="Enfermagem.php" class="destaque" onmouseover="overImg4.call()" onmouseout="outImg4.call()">
                    <div class="img-container">
                      <img  src="./IMG/Curso_N/pair_doctors_light.svg" alt="Saúde" class="img-fluid img-noneS">
                    </div>
                    <h4 class="title mb-lg-3 mb-1">Enfermagem</h4>
                    <p >Duração do Curso: 4 anos</p>
                    <p>Propina: 23,000KZ com bónus de 2000KZ</p>
                    <p>Cartão de Estudante: 4500KZ</p>
                    <p class="mb-lg-4">Certificado: IMS</p>
                    
                  </a>
                </div>

               

                <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 mt-3">
                    <a href="Contabilidade.php" class="destaque"  onmouseover="overImg5.call()" onmouseout="outImg5.call()">
                    <div class="img-container">
                      <img  src="./IMG/Curso_N/pair_contabilidade_light.svg" alt="Saúde" class="img-fluid img-noneC">
                    </div>
                    <h4 class="title mb-lg-3 mb-1">Contabilidade e Gestão Financeira </h4>
                    <p>Duração do Curso: 4 anos</p>
                    <p>Propina: 23,000KZ com bónus de 2000KZ</p>
                    <p>Cartão de Estudante: 4500KZ</p>
                    <p>Certificado: ETESAL</p>
                    

                    </a>
                </div>
                <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 mt-3">
                    <a href="Recursos.php" class="destaque"  onmouseover="overImg6.call()" onmouseout="outImg6.call()">
                    <div class="img-container">
                      <img  src="./IMG/Curso_N/pair_recurH_light.svg" alt="Saúde" class="img-fluid img-noneRH">
                    </div>
                    <h4 class="title mb-lg-3 mb-1">Gestão de Recursos Humanos</h4>
                    <p>Duração do Curso: 4 anos</p>
                    <p>Propina: 23,000KZ com bónus de 2000KZ</p>
                    <p>Cartão de Estudante: 4500KZ</p>
                    <p>Certificado: ETESAL</p>
                    

                    </a>
                </div>
              


              </div>
            </div>
            </section>
            <!-- //! End Area Cursos -->

          


            <!-- //!  Start Area Aderencia de Curso -->
            <section id="adCurso" class="block">

              <main>
              <h1 class="title text-center mb-md-3 mb-4">  Aderencia de Cursos </h1>
              <h3 class="sub-title text-center  mb-5"> Os cursos mais aderidos no Colégio Alpega no ano de 2021/2022 </h3>



              <div class="container-fluid pt-md-4">

                <div class="row salto" >

                  <div class="col-lg-2 mb-3 text-center">
                    <span>
                      <h2 class="count-number" >500</h3>
                      <p>Curso de Enfermagem</p>
                    </span>
                  </div>

                  <div class="col-lg-2 mb-3 text-center">
                    <span>
                      <h2 class="count-number" >200</h3>
                      <p>Curso de Informática</p>
                    </span>
                  </div>

                  <div class="col-lg-2 mb-3 text-center">
                    <span>
                      <h2 class="count-number" >144</h3>
                      <p>Curso de Contabilidade e Gestão Financeira</p>
                    </span>
                  </div>

                  <div class="col-lg-2 mb-3 text-center">
                    <span>
                      <h2 class="count-number">150</h3>
                      <p>Curso de Administração e Gestão Empresarial</p>
                    </span>
                  </div>
                  <div class="col-lg-2 mb-3 text-center">
                    <span>
                      <h2 class="count-number" >155</h3>
                      <p>Curso de Recursos Humanos</p>
                    </span>
                  </div>



                  <div class="col-lg-2 mb-3 text-center">
                    <span>
                      <h2 class="count-number" >180</h3>
                      <p>Curso de Direito</p>
                    </span>
                  </div>
                  

                </div>

              </div>

            </main>


            </section>
            <!-- //!  End Area Aderencia de Curso -->



            <!-- //! Start Area Fotos-->

            <section id="areaGaleria" class="block">
              <h1 class="title text-center"> Conheça mais sobre o Colégio</h1>
            
              <!--//! Start Fotos -->
            <main class="galeria">
            
              <img src="./IMG/Novos/Escola-Front2.jpeg" alt="Parte frontal da Escola" class="image-grid-col-2 image-grid-row-2" >
              <img src="./IMG/Novos/Patio2.jpeg" alt="Patio da Escola" >
              <img src="./IMG/Novos/escola-porta-2.jpeg" alt="Portão Principal">
              <img src="./IMG/Novos/Terraço.jpeg" alt="Terraço da Escola">
              <img src="./IMG/Novos/Escola-lado1.jpeg" alt="" >

            </main>
            <!--//! End Fotos -->

          </section>
            
            <!--//!  End Area Fotos-->




          <!--//! Start Area Formulários-->


          <section  class="block">

          <form action="?p=index" method="POST">

            <div class="container" id="custonForm">
              
              <!--//! Start Title-->
              <nav class="titleForm mb-5 pt-5">
                <h2 class="title text-center"> Diga-nos a sua dúvida sobre o Colégio </h2>
              </nav>
              <!--//! End Title-->
              
              <input type="hidden" name="usersContactos" value="usersContact">

              <!--//! Start Nome-->
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Usuário</span>
                <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1"  required id="nameUsersD" name="nomeUsers">
              </div>
              <!--//! End Nome-->

              <!--//! Start Email -->
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" class="form-control" placeholder="Email" aria-label="UserEmail" id="exampleInputEmail1" aria-describedby="emailHelp" required id="emailUsersD" name="emailUsers">
              </div>
              <!--//! End Email -->

              <!--//! Start Area de Texto-->
              <div class="input-group mb-3">
                <span class="input-group-text">Escreva para nos</span>
                <textarea class="form-control" aria-label="With textarea" placeholder="Dúvidas" required id="textUsersD" name="area_texto"></textarea>
              </div>
              <!--//! End Area Texto-->



                <!--//! Botão Enviar Dados -->
                <button type="submit" class="btn-Form" >Enviar</button>
      
                           

              
            </div>
           
          </form>           


        </section>

        <!--//! End Area Formulários -->


        <?php include "../ProjetoFinal/Layout/Footer.php"; ?>





            <!--//$ Start JavaScript -->
           
              
           
              <script src="/JS/main.js"></script>
              <script src="/JS/Counter.js"></script>

              
              
              
            <!--//$ End JavaScript -->
  </body>
</html>