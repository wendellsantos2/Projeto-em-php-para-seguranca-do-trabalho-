<!DOCTYPE html>
<html>
<head>
<title>Seguraça do trabalho </title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/512/968/968837.png" />
<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="./assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="./assets/css/font.css">
<link rel="stylesheet" type="text/css" href="./assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="./assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="./assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="./assets/css/theme1.css">
<link rel="stylesheet" type="text/css" href="./assets/css/style1.css">
<link rel="stylesheet" type="text/css" href="./assets/css/login.css">
<link rel="stylesheet" href="./assets/css/cors.css">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
<header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
               
          
            </ul>
          </div>
   
          <div class="header_top_right">
           
                  
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
           </div>
      </div>
    </div>
  </header>
<!-- NAVEGAÇÂO -->

<section id="navArea">
        <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
              <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Início</span></a></li>
              <li><a href="index.php">Início</a></li>
        
              <li><a href="sobrenos.php">Sobre nós </a></li>
              
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Entre / Cadastre-se</a>
                <ul class="dropdown-menu" role="menu">
             
                  <li><a href="entrar.php">Entre</a></li>
                  <li><a href="cadastro.php">Cadastre-se</a></li>
                  
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </section>
      <!-- NAVEGAÇÂO -->
 
 <!--NAV NOTÌCIAS -->
<section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>Notícias</span>
          <ul id="ticker01" class="news_sticker">
        <li><a  href="cadastro.php"><img src="images/news_thumbnail3.jpg" alt="">Concursos público para Segurança de Trabalho </a></li>
            <li><a  href="cadastro.php"><img src="images/news_thumbnail3.jpg"  alt="">Vagas para estágio TST </a></li>
            <li><a  href="cadastro.php"><img src="images/news_thumbnail3.jpg"  alt="">Vagas Agora </a></li>
            <li><a href="cadastro.php"><img src="images/news_thumbnail3.jpg"  alt="">Estágio de Segurança do Trabalho </a></li>
            <li><a  href="cadastro.php"><img src="images/news_thumbnail3.jpg"  alt="">Vagas Agora </a></li>
            <li><a  href="cadastro.php"><img src="images/news_thumbnail3.jpg"  alt="">Estágio de Segurança do Trabalho </a></li>
             
          </ul>
          <div class="social_area">
            <ul class="social_nav">
             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--NAV NOTÌCIAS -->


  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Cadastro</h2>
            <p>Cadastre-se e fique por dentro das vagas que o mercado de trabalho precisa.</p>
          

                          <!--Cadastro--> 
                          <div class="formulario">  
                <form action="./controller/LoginController.php" method="POST" class="row g-3">
                  <div class="col-md-4">
                    <label for="nome" class="form-label">Nome Completo<span>*</span></label>
                    <input type="text" class="form-control" id="nome" name="nome"  >
                  </div>
                  <div class="col-md-3">
                      <label for="login" class="form-label">Login<span>*</span></label>
                      <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                  <div class="col-md-3">
                    <label for="senha" class="form-label">Senha<span>*</span></label>
                    <input type="password" class="form-control" id="senha" name="senha">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                  </div>   
              </form>
              </div>

              <!-- //Cadastro-->


          </div>
        </div>
      </div>
    
      <!-- BLOG TST -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="single_sidebar">
          <h2><span>Blog TST </span></h2>
          <ul class="spost_nav">
            <li>
              <div class="media wow fadeInDown"> <a href="cadastro.php" class="media-left"> <img alt="" src="https://arquivos.sistemaeso.com.br/blog/imagens/seguranca-no-trabalho/o-que-e-um-epi-equipamento-de-protecao-individual.jpg"> </a>
                <div class="media-body"> <a href="cadastro.php" class="catg_title">EPIS SALVAM VIDAS</a> </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown"> <a href="cadastro.php" class="media-left"> <img alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmX75oMpxKYOj6tMkx4P0NP0ux0KVKsRQpxg&usqp=CAU"> </a>
                <div class="media-body"> <a href="cadastro.php" class="catg_title"> Combatendo Covid-19 nas Empresas</a> </div>
              </div>
            </li>
            <li>
              <div class="media wow fadeInDown"> <a href="cadastro.php" class="media-left"> <img alt="" src="images/post_img1.jpg"> </a>
                <div class="media-body"> <a href="cadastro.php" class="catg_title"> 9 informações essenciais sobre Segurança do Trabalho.</a> </div>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    <!-- //BLOG TST -->

    </div>
  </section>
  <!--RODAPÈ -->
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
      
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Início </a></li>
              <li><a href="#">Sobre nós </a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contato</h2>
            <p>SENAC Nova Iguaçu </p>
            <address>
            R. Cel. Carlos Matos, 86 - Centro, Nova Iguaçu - RJ, 26210-200
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
    <p class="copyright">Copyright &copy; 2022 <a href="index.php">Max Tecnologia</a></p>
 
    </div>
  </footer>
    <!--RODAPÈ -->

</div>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="assets/js/jquery.newsTicker.min.js"></script> 
<script src="assets/js/jquery.fancybox.pack.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>