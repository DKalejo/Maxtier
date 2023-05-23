<?php include '../controlador/Signup.php'; ?>
<?php include 'includes/head.php';?>
<body>
    <?php if(!empty($message)):?>
        <div class="alert">
            <p><?= $message; ?></p>
        </div>
    <?php endif;?>
    <form action="../controlador/Signup.php" method="post">
        <h2>Signup</h2>
        <input type="text" name="id_user" placeholder="Cedula" class="input">
        <input type="text" name="username" placeholder="Usuario" class="input">
        <input type="text" name="name_complete" placeholder="Nombre completo" class="input">
        <input type="text" name="adress" placeholder="Direccion" class="input">
        <input type="hidden" name="perfil" value="u">
        <input type="text" name="password" placeholder="Password" class="input">
        <input type="text" name="email" placeholder="Correo@gamil" class="input">
        <input type="submit" value="Signup" id="btn" name="Signup">
    </form>
    <?php include '../vista/includes/footer.php' ?>
</body>

</html>