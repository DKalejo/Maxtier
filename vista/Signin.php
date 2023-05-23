<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://localhost/Maxtier/assets/css/login.css">
  <title>Login</title>
</head>
<body>
  <form method="post" action="../controlador/log.php">
    <input type="text" name="username" placeholder="Usuario" required />
    <input type="password" name="password" placeholder="Contraseña" required />
    <button type="submit" name="login">Ingresar</button>
  </form>
</body>

</html>