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

                <!--relogio e data -->
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
              <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
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

  <!--//NOTICIAS -->


  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
  
<section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
         
            <h2>Entre Aqui </h2>
            <p>Atualizações semanais de vagas de emprego e dicas para conseguir empregos em Técnico de Segurança do trabalho. ;)</p>
                      
                                <div class="modal-body">
                                       <form action="#" method = "POST">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Login</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Login*" name= "login" >
                                        <div name= "login1" class="form-text">Entre com seus dados de acesso.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label" placeholder="Senha*">Senha</label>
                                        <input type="password" class="form-control" name="senha">
                                    </div>
                     
                                    <button type="submit" class="btn btn-primary" name="acessar"  >Acessar</button>
                            </form>
		      </div>
 
    <?php 
                       /*ajustar aquiiiiiiiii */
                                        if (isset($_POST['acessar'])){
                                                                          
                                         include "./php/conexao.php";
                                         
                                         $login = $_POST['login'];
                                         $senha = $_POST['senha'];


                                       $sql = mysqli_query($conexao,"SELECT  * from aluno WHERE loginAluno = '$login' and senhaAluno = '$senha'");

                                       if ($linha = mysqli_fetch_array($sql)) {
                                       
                                         $_SESSION['login'] = "login";
                                         session_start();
                                    echo "
                                    <script>
                                          location.href='./restrito/index.php'
                                          alert('Bemm Vindo !! Obrigado por logar $login !!   ') 
                                        </script> ";
                                       }
                                       else{
                                        echo   "login inválido ou este usuario não existe.";
                                    }
                                  }   
                                 
                                    
                                    ?>
                                        
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
       
      </div>
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