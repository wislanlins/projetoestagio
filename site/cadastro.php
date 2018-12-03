<?php
$usuario= $_REQUEST['user'];
$email=$_REQUEST['email'];
$senha=$_REQUEST['senha'];
$cpf=$_REQUEST['cpf'];
$sexo=$_REQUEST['sexo'];
$nome=$_REQUEST['nome'];
$endereco=$_REQUEST['endereco'];
$dt_nasc=$_REQUEST['dt_nasc'];
$telefone=$_REQUEST['telefone'];
include_once 'bd.php';


$sql="insert into usuario values(null, '".$usuario."','".$senha."', '".$nome."','".$email."','".$endereco."',
                  '".$dt_nasc."','".$telefone."','".$cpf."','".$sexo."')";
$stmt = $con->prepare($sql);
$stmt->execute();
?>