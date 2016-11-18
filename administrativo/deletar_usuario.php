<?php
// use DateTime;
require_once "conexao.php";
?>
<?php

        $query = "delete from usuarios where id = '".$_GET['id']."'";
        $insert = mysqli_query($con, $query);

        if ($insert) {

            Header('Location: listar_usuario.php');
            // echo "<script>alert('Usuario deletado com sucesso.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./'>";
            //Usuario não Cardastrado sem Sucesso!!
        }else {
            echo "<script>alert('Deu merda!.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./'>";
        }

?>
