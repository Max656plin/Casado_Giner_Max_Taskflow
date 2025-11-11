<?php
session_start();

function handleLogin($email, $password, $usuarios_bbdd)
{
    if (isset($usuarios_bbdd[$email]) && $usuarios_bbdd[$email]['password'] === $password) 
        {
            $_SESSION['user_id'] = $usuarios_bbdd[$email]['id'];
            $_SESSION['user_name'] = $usuarios_bbdd[$email]['nombre'];
        return true;
        }
    return false;
}

function checkAuth()
{
    return isset($_SESSION['user_id']);
}

function handleLogout()
{
    session_destroy();
    header('Location: index.php?accion=login');
    exit();
}
?>