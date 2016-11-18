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
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <div class="container">

      <form class="form-signin"method="POST" action="valida_login.php">
        <h2 class="form-signin-heading text-center">Área para Usuário Cadastrado</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>
        <input type="text" name="usuario" class="form-control" placeholder="Digitar Usuário" required autofocus><br />
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required>

        <button class="btn btn-lg btn-success btn-block" type="submit" onClick="parent.location='administrativo.php'">Entrar</button>
        <button class="btn btn-lg btn-primary btn-block" type="submit"onClick="parent.location='cadastro.php'">Cadastrar</button>
      </form>

    </div> <!-- /container -->

    <footer class="footer">
      <div class="container">
        <p class="text-muted">copyright © 2016 todos direitos reservados -
        Desenvolvido Por Matheus | Lázaro</p>
      </div>
    </footer>


    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
