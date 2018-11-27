<?php
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $dsn='mysql:host=localhost;dbname=centertech';
  $user='root';
  $pass='';
  $pdo = new PDO($dsn, $user, $pass);
    if (isset($entrar)) {
             
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
