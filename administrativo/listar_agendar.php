<?php
include_once ("conexao.php");
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

  <title>Listar Agendar</title>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

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
  </nav><br /><br />
        <!-- Fim navbar -->

        <?php
            $con=mysqli_query($con, "SELECT * FROM agendar ORDER BY 'id'");
            // $linhas=mysqli_fetch_array($con);
            ?>

            <div class="container theme-showcase" role="main"><br /><br /><br />
              <div class="page-header">
                <h1>Listas de Agendar</h1>
              </div>
              <div class="row">
                <div class="col-md-10">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Serviço</th>
                        <th>Corte</th>
                        <th>Açoes</th>
                        <th></th>
                      </tr>

                    </thead>
                    <tbody>
                    <?php while ($linhas= mysqli_fetch_array($con)){?>
                                  <tr></tr>
                        <td><?=$linhas['id']?></td>
                        <td><?=date("d/m/Y", strtotime($linhas['data']))?></td>
                        <td><?=$linhas['horario']?></td>
                        <td><?=$linhas['servico']?></td>
                        <td><?=$linhas['corte']?></td>
                        <td><a href="editar_agendar.php?&id=<?php echo $linhas['id'];?>" class="btn btn-success">Editar</a></td>
                        <td>
                            <a href="deletar_agendar.php?&id=<?php echo $linhas['id'];?>" class="btn btn-danger">Apagar</a>
                        </td>

                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div> <!-- /container -->


            <!-- Bootstrap core JavaScript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->
            <script src="js/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/docs.min.js"></script>
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <script src="js/ie10-viewport-bug-workaround.js"></script>
          </body>
        </html>
