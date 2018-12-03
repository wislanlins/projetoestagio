<?php 
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $connect = new PDO("mysql:host=localhost;dbname=trabalho_wilson", "root", "");
    if (isset($login) && isset($senha)) {
            
      $sql = "SELECT * FROM usuario WHERE login = '".$login."' AND senha = '".$senha."'";
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        $valores = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount()<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:login.php");
        }
    }
?>