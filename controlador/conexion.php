<?php
//Se definen las variables para almacenar la informacion de la base de datos
//Coloque localhost:3308 para poder trabajar en mi computador solo se borra :3308 y funciona correctamente
//en otro computador
$host = 'localhost:3308';
$user = 'root';
$password = '';
$db = 'maxtier';


//Se le dice al servidor "try", como si fuera a decir "Intenta"
try{
  $con = new PDO("mysql:host=$host;dbname=$db;",$user,$password); //Se establece la conexion PDO
  //Se marca primero cual es el servidor y despues el nombre de la base de datos
  //en el "host" y "dbname" y el usuario y la contraseña se coloca despues de las comillas
}catch(PDOexception $error){ //Se dice "catch" por si no sucede la conexion entonces que capture y maneje excepcion de errores
  //como por ejemplo decir "Si no sucede la conexion excepto por este tal error entonces..."
  die( 'Connected failed '.$error->getMessage()); //Se marca el error con "die()" y dice 
  //"Conexion fallida ".error->muestraelmensajeporpantalla
}
?>

