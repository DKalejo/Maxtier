<?php
if (!empty($_POST['username']) && !empty($_POST['password'])) {
  session_start();
  include 'conexion.php';
  $sql = "SELECT id_user,username,password,perfil,email FROM user WHERE username=:username";
  $execute = $con->prepare($sql);
  $execute->bindParam(':username', $_POST['username']);
  $execute->execute();
  $rows = $execute->fetch(PDO::FETCH_ASSOC);
  $message = '';
  if (count($rows) > 0 && password_verify($_POST['password'], $rows['password'])) {
    if ($rows['perfil'] == 'u') {
      $_SESSION['id'] = $rows['id_user'];
      header('Location: ../vista/Perfil_v.php');
    }
    else{
      $_SESSION['id'] = $rows['id_user'];
      header('Location: ../vista/Perfil_u.php');
    }
  }
  else{
    header('Location:../vista/Login.php');
  }
}
