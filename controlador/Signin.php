<?php 
  include('conexion.php');
  session_start();
  if(isset($_POST['username'])){
    if(empty($_POST['username'])){
      $username = $_POST['username'];
      $pass = $_POST['password'];
      $_SESSION['username'] = $user;

      $sql = "SELECT * FROM user";
      $result = mysqli_query($con ,$sql);
      
  }
}





?>