 <?php
session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
include_once ("conexao.php");

$con = mysql_query("SELECT * FROM usuarios WHERE login='$usuario' AND senha='$senha' LIMIT 1");
$resultado = mysql_fetch_assoc($con)
echo $resultado["nome"]; -->
echo "Usuario: ".$resultado['nome'];
error_reporting(0);
if(empty($resultado)){
     //mensagem de error_reporting
  $_SESSION['loginErro'] = "Usuario ou senha Inválido";

   //Manda o usuario para a tela de login
   header ("Location: login.php");
}else {
      $_SESSION['usuarioNome'] = $resultado['nome'];
     header("administrativo.php";)
 }
?>
