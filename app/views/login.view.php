<form action ="index.php?accion=login" method="post">
    <h2>Iniciar Sesión</h2>

    <input type="email" name="email" placeholder="Correo Electrónico" required>

    <input type="password" name = "password" placeholder="contraseña" required>

    <button type="submit">Entrar</button>
    
    <?php if (isset($error))
    {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
</form>