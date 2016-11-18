<?php
// use DateTime;
require_once "conexao.php";
?>
<?php

  $data      = $_POST['data'];
  $horario   = $_POST['horario'];
  $servico   = $_POST['servico'];
  $corte     = $_POST['corte'];


  if(empty($data )){
    echo "<script>alert('Preencha o data para agendar.'); history.back();</script>";
  }elseif(empty($horario)){
    echo "<script>alert('Preencha horario para agendar.'); history.back();</script>";
  }elseif(empty($servico)){
  echo "<script>alert('Preencha servico para agendar.'); history.back();</script>";
  }elseif(empty($corte)){
    echo "<script>alert('Preencha corte para agendar.'); history.back();</script>";
  }else{
      //

      $dataFormatada = date("Y-m-d", strtotime($data));

      // echo "<pre>";
      // print_r($dataFormatada);
      // echo "</pre>";die;

      // pro editar, leva os dodos pro formulário
  if (!empty($_GET['id'])) {
    $queryInsert = "INSERT INTO `agendar` (`data`, `horario`,`servico`,`corte`)
  VALUES ('".$dataFormatada."', '".$horario."', '".$servico."','".$corte."')";
      $insert = mysqli_query($con, $queryInsert);
}
// pro salvar agendar
      $queryInsert = "INSERT INTO `agendar` (`data`, `horario`,`servico`,`corte`)
    VALUES ('".$dataFormatada."', '".$horario."', '".$servico."','".$corte."')";
        $insert = mysqli_query($con, $queryInsert);

        if ($insert) {
            Header('Location: administrativo.php');
            echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./'>";
            //Usuario não Cardastrado sem Sucesso!!
        }else {
            echo "<script>alert('Deu merda!.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./'>";
        }
    }

?>
