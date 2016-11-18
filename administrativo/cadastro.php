<?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Pagina para realizar login">
    <meta name="author" content="Matheus">
    <link rel="icon" href="imagens/favicon.jpg">

    <title>Área Administrativa</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>
<div class="container">
            <h1>Cadastro de Clientes</h1>
</div>
<div class="container">
      <form class="form-horizontal" method="post" action="salvar.php">
  <div class="form-group">
      <label for="nome" class="col-sm-2 control-label">Nome</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="nome" placeholder="Nome" required autofocus>
    </div>
  </div>
  <div class="form-group">
    <label for="sobrenome" class="col-sm-2 control-label">Sobrenome</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required>
    </div>
  </div>
  <div class="form-group">
    <label for="data" class="col-sm-2 control-label">Data de Nascimento</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" name="data" placeholder="Data de Nascimento" required>
    </div>
  </div>
    <div class="form-group">
      <label for="telefone" class="col-sm-2 control-label">Telefone</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="telefone" placeholder="Telefone" required>
      </div>
    </div>
    <div class="form-group">
      <label for="cpf" class="col-sm-2 control-label">CPF</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="cpf" placeholder="CPF" required>
      </div>
    </div>
    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="email" placeholder="Email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="usuario" class="col-sm-2 control-label">Usuário</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="usuario" placeholder="Usuário" required>
      </div>
    </div>
    <div class="form-group">
      <label for="senha" class="col-sm-2 control-label">Senha</label>
      <div class="col-sm-4">
        <input type="password" class="form-control" name="senha" placeholder="Senha" required>
      </div>
    </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
    <button class="btn btn-lg btn-primary btn-block" type="submit" onClick="parent.location='administrativo.php'">Cadastrar</button>
    <button class="btn btn-lg btn-danger btn-block" type="reset">Limpar</button>

    </div>
  </div>
</form>

    </div> <!-- /container -->


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
