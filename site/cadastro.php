<?php 
 
$login = $_POST['login'];
$senha = MD5($_POST['senha']);
//$connect = mysql_connect('localhost','root','');
$dsn='mysql:host=localhost;dbname=centertech';
  $user='root';
  $pass='';
  $pdo = new PDO($dsn, $user, $pass);
//$query_select = "SELECT login FROM usuarios WHERE login = '$login'";
$consulta = $pdo->query("SELECT login FROM `usuarios` where login = '$login'");
$select = mysql_query(consulta,$pdo);
$array = mysql_fetch_array($select);
$logarray = $array['login'];
 
  if($login == "" || $login == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";
 
    }else{
      if($logarray == $login){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
        $insert = mysql_query($query,$pdo);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
        }
      }
    }
