<?php
if(!empty($_POST)) {
    if (isset($_POST['Signup'])) {
        if (!empty($_POST['id_user']) && !empty($_POST['username']) && !empty($_POST['name_complete']) && !empty($_POST['adress']) && !empty($_POST['password']) && !empty($_POST['email'])){
            include("conexion.php");
            $sql = "INSERT INTO user(id_user,username,name_complete,adress,perfil,password,email) VALUES (:id_user,:username,:name_complete,:adress,:perfil,:password,:email)";
            $stmt = $con->prepare($sql);
            $stmt->bindParam(":id_user",$_POST['id_user']);
            $stmt->bindParam(":username",$_POST['username']);
            $stmt->bindParam(":name_complete",$_POST['name_complete']);
            $stmt->bindParam(":adress",$_POST['adress']);
            $stmt->bindParam(":perfil",$_POST['perfil']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(":password",$password);
            $stmt->bindParam(":email",$_POST['email']);
            if ($stmt->execute()) {
                session_start();
                header('Location: ../vista/Perfil.php');
            }
            else{
                $message= 'Error to signup';
            }
        }
    }
}       
?>
