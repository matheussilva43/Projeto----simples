<?php
          include_once ("conexao.php");
          $id = $_GET['id'];
          //Execulta consulta
          $result = mysqli_query($con, "SELECT * FROM usuarios WHERE id='$id' LIMIT 1");
          $resultado = mysqli_fetch_assoc($result);

          // echo "<pre>";
          // print_r($resultado);
          // echo "</pre>";
          // die;
 ?>
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Página Administrativa">
   <meta name="author" content="Matheus">
          <link rel="icon" href="imagens/favicon.jpg">
          <title>Editar Usuario</title>
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

<div class="container">
            <h1>Editar Clientes</h1>
</div>
<div class="container">
      <form class="form-horizontal" method="post" action="salvar_editar_cadastro.php">
  <div class="form-group">
      <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $resultado['nome'];?>" required autofocus >
    </div>
  </div>
  <div class="form-group">
    <label for="sobrenome" class="col-sm-2 control-label">Sobrenome</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" value="<?php echo $resultado['sobrenome'];?>" required>
    </div>
  </div>
  <div class="form-group">
    <label for="data" class="col-sm-2 control-label">Data de Nascimento</label>
    <div class="col-sm-4">
      <input type="text" value="<?=date('d/m/Y', strtotime($resultado['data']))?>" class="form-control" name="data" placeholder="Data de Nascimento" required>
    </div>
  </div>
    <div class="form-group">
      <label for="telefone" class="col-sm-2 control-label">Telefone</label>
      <div class="col-sm-4">
        <input type="text" value="<?php echo $resultado['telefone'];?>" class="form-control" name="telefone" placeholder="Telefone" required>
      </div>
    </div>
    <div class="form-group">
      <label for="cpf" class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-4">
        <input type="text" value="<?php echo $resultado['cpf'];?>" class="form-control" name="cpf" placeholder="CPF" required>
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $resultado['email'];?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="usuario" class="col-sm-2 control-label">Usuário</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="usuario" placeholder="Usuário" value="<?php echo $resultado['usuario'];?>" required>
      </div>
    </div>
    <div class="form-group">
      <label for="senha" class="col-sm-2 control-label">Senha</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" name="senha" placeholder="Senha" value="<?php echo $resultado['senha'];?>" required>
      </div>
    </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
      <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="parent.location='listar_usuario.php'">Editar</button>
      <button class="btn btn-lg btn-danger btn-block" type="reset">Limpar</button>
    </div>
  </div>
</form>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
