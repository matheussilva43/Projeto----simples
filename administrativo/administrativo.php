<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="Página Administrativa">
  <meta name="author" content="Matheus">
  <link rel="icon" href="imagens/favicon.jpg">

  <title>Administrativo</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  <link href="theme.css" rel="stylesheet">

  <script src="js/ie-emulation-modes-warning.js"></script>


</head>
<body>

  <!-- Inicio navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="administrativo.php">Barbearia Imperial</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="listar_usuario.php">Listar Usuários</a></li>
              <li><a href="listar_agendar.php">Listar Agendar</a></li>
              <li><a href="cadastro.php">Cadastrar</a></li>
              <li><a href="agendar.php">Agendar</a></li>
            </ul>
          </li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
        <!-- Fim navbar -->
  <div class="container theme-showcase" role="main">
    <div class="page-header">
      <h1>Bem Vindo a área administrativa</h1>
    </div>




  </div> <!-- /container -->
   <footer class="footer">
       <div class="container">
         <p class="text-muted">copyright © 2016 todos direitos reservados -
         Desenvolvido Por Matheus | Lázaro</p>
       </div>
     </footer>
<!--  ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap-modal-carousel.min.js"></script>
  </body>
</html>
