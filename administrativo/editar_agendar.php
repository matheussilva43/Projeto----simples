<?php
          include_once ("conexao.php");
          $id = $_GET['id'];
          //Execulta consulta
          $result = mysqli_query($con, "SELECT * FROM agendar WHERE id='$id' LIMIT 1");
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

   <title>Editar - Agendar Corte</title>

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
   </nav>
         <!-- Fim navbar -->
   <div class="container theme-showcase" role="main"><br/><br/><br/>


     <div class="page-header">
       <h1>Edita - Agende seu corte</h1>
     </div>
<div class="container">
      <form class="form-horizontal" method="post" action="editar_salvar_agendar.php">
    <div class="form-group">
      <label for="data" class="col-sm-2 control-label">Data</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" name="data" placeholder="Selecione a data" value="<?php echo $resultado['data'];?>" required autofocus>
    </div>
  </div>
    <div class="form-group">
      <label for="horario" class="col-sm-2 control-label">Horário</label>
    <div class="col-sm-4">
      <input type="time" class="form-control" name="horario" placeholder="Selecione o horario" value="<?php echo $resultado['horario'];?>" required autofocus>
    </div>
  </div>
  <div class="form-group">
    <label for="servico" class="col-sm-2 control-label">Escolha o serviço</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="servico" placeholder="Selecione o serviço" value="<?php echo $resultado['servico'];?>" required autofocus>
      <!-- <select class="form-control" class="selectpicker">
        <optgroup label="Manhã" type="text" name="servico">
         <option> Selecione o serviço desejado</option>
         <option>Cabelo Adulto c/ (Matheus) </option>
         <option>Cabelo Infantil c/ (Matheus)</option>
         <option>Barca C/ (Matheus)</option>
         <option>Cabelo e Barba c/ (Matheus) </option>
         <option>Cabelo Adulto c/ (Josivan) </option>
         <option>Cabelo Infantil c/ (Josivan)</option>
         <option>Barca C/ (Josivan)</option>
         <option>Cabelo e Barba c/ (Josivan) </option>
         <option>Cabelo Adulto c/ (Lázaro) </option>
         <option>Cabelo Infantil c/ (Lázaro) </option>
         <option>Barba c/ (Lázaro)</option>
         <option>Cabelo e Barba c/ (Lázaro)</option>
         <option>Cabelo Adulto c/ (Adriano) </option>
         <option>Cabelo Infantil c/ (Adriano) </option>
         <option>Barba c/ (Adriano)</option>
         <option>Cabelo e Barba c/ (Adriano)</option>
      </select> -->
    </div>
  </div>
  <div class="form-group">
    <label for="corte" class="col-sm-2 control-label">Escolha o Corte</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="corte" placeholder="Selecione o Corte" value="<?php echo $resultado['corte'];?>" required autofocus>
      <!-- <select class="form-control" class="selectpicker">
        <optgroup label="CORTE ADULTO" name="corte">
         <option> Selecione o Corte desejado</option>
         <option>UNDERCUT CRESPO</option>
         <option>AFRO-CACHOS</option>
         <option>BLACK POWER</option>
         <option>DREAD AFRO</option>
         <option>UNDERCUT</option>
         <option>RAZOR PART</option>
         <option>POMPADOUR</option>
         <option>FRANJA LONGA</option>
         <option>RASPADO</option>
         <option>RASPADO ALTO</option>
         <option>RASPADO DEGRADÊ</option>
         <option>DE LADO</option>
         <option>BAGUNÇADO CHIC (MESSI STYLE)</option>
         <option>TOP KNOT</option>
         <option>COQUE SAMURAI</option>
         <optgroup label="BARBA">
         <option value="valor1">BIGODE CHEVRON</option>
         <option value="valor2">BIGODE MODELADO</option>
         <option value="valor3">CAVANHAQUE</option>
         <option value="valor2">CAVANHAQUE CHEIO</option>
         <option value="valor2">BARBA ZAPPA</option>
         <option value="valor2">BARBA POR FAZER</option>
         <option value="valor2">BARBA CERRADA</option>
         <option value="valor2">BARBA CORTINA DE QUEIXO</option>
         <option value="valor2">BARBA DESENHADA</option>
         <optgroup label="CORTE INFANTIL">
         <option value="valor1">UNDCUT CRES. INFANTIL</option>
         <option value="valor2">AFRO-CACHOS INFANTIL</option>
         <option value="valor3">BLACK POWER INFANTIL</option>
         <option value="valor2">ANJO INFANTIL</option>
         <option value="valor2">UNDERCUT INFANTIL</option>
         <option value="valor2">RAZOR PART INFANTIL</option>
         <option value="valor2">POMPADOUR INFANTIL</option>
         <option value="valor2">FRANJA LONGA INFANTIL</option>
         <option value="valor2">RASPADO DEGRADÊ INFANTIL</option>
         <option value="valor2">DE LADO INFANTIL</option>
         <option value="valor2">BAGUNÇADO CHIC INFANTIL(MESSI STYLE)</option>
      </select> -->
    </div>
  </div>
  <br/>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-2">
      <a><button class="btn btn btn-primary" type="submit">Agendar</button></a>
      <a><button class="btn btn btn-danger" type="reset">Limpar</button></a>
      <!-- <td><a href="#" class="btn btn-primary">Agendar</a></td>
      <td><a href="#" class="btn btn-danger" type="reset">Limpar</a></td> -->
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
