<?php
require_once "conexao.php";
?>
<?php

  $nome      = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $data      = $_POST['data'];
  $telefone  = $_POST['telefone'];
  $cpf       = $_POST['cpf'];
  $email     = $_POST['email'];
  $usuario   = $_POST['usuario'];
  $senha     = $_POST['senha'];


  if(empty($nome)){
    echo "<script>alert('Preencha o nome para se cadastrar.'); history.back();</script>";
  }elseif(empty($sobrenome)){
    echo "<script>alert('Preencha sobrenome para se cadastrar.'); history.back();</script>";
  }elseif(empty($data)){
  echo "<script>alert('Preencha data para se cadastrar.'); history.back();</script>";
  }elseif(empty($telefone)){
    echo "<script>alert('Preencha telefone para se cadastrar.'); history.back();</script>";
  }elseif(empty($cpf)){
    echo "<script>alert('Preencha cpf para se cadastrar.'); history.back();</script>";
  }elseif(empty($email)){
    echo "<script>alert('Preencha email para se cadastrar.'); history.back();</script>";
  }elseif(empty($usuario)){
    echo "<script>alert('Preencha usuario para se cadastrar.'); history.back();</script>";
  }elseif(empty($senha)){
    echo "<script>alert('Preencha senha para se cadastrar.'); history.back();</script>";
  }else{
      // formatando a data  para ....
      $dataFormatada = date("Y-m-d", strtotime($data));
}
            // pro salvar editar cadastro
$query = "UPDATE usuarios SET nome='$nome', sobrenome='$sobrenome', data='$data',telefone='$telefone', cpf='$cpf',
 email='$email', usuario='$usuario', senha='$senha' WHERE id=";
        $insert = mysqli_query($con, $query);

            // redireciona pra pagina
            //  header("Location: listar_usuario.php");

            //Confirmação se o cadastro foi editado com Sucesso!!

        if ($query) {
            echo "<script>alert('Usuário editado com sucesso.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./'>";

            //Usuario Editado sem Sucesso!!
        }else {
            echo "<script>alert('Deu merda!.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./'>";
        }


?>
