<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar Sesion</title>
    <link rel="icon" href="icono_aiep..ico">
</head>

<body background="Fondo_index3.jpg" width="200" height="70">
<?php error_reporting(0);?>
    <header style="background-color:#36469B">
        <a href="Index.php"><img src="aiep_logo.png" width="200" height="70"></a>
    </header>
    
    <form action="" method="post">
        <center><b><h1 style="color: white">Login</b></h1>
        <table>
            <tr>
                <td style="color: white">Usuario: </td>
                <td><input type="text" name="txtUser" value="" autocomplete="off"></td>
            </tr>
            <tr>
                <td style="color: white">Contraseña: </td>
                <td><input type="password" name="txtPassword" value="" autocomplete="off"></td>
            </tr>
            <tr>
                <td><input type="submit" name="btnIniciar" value="Iniciar sesión"><td>
                <a href="Agregar_usuario-1.php">Registrarse
            </tr>
        </table>
        </center>
    </form>
    <?php
    
 
    include('Funcion.php');
    session_start();
     
    if (isset($_POST['btnIniciar'])) {
     
        $username = $_POST['txtUser'];
        $password = $_POST['txtPassword'];
     
        $cnn
        $query = $cnn->prepare("SELECT * FROM usuario WHERE name=:username");
        $query->bindParam("name", $username, PDO::PARAM_STR);
        $query->execute();
     
        $result = $query->fetch(PDO::FETCH_ASSOC);
     
        if (!$result) {
            echo '<p class="error">Username password combination is wrong!</p>';
        } else {
            if (password_verify($password, $result['password'])) {
                
                echo '<p class="success">Congratulations, you are logged in!</p>';
                header("Location: index_user.php");
            } else {
                echo '<p class="error">Username password combination is wrong!</p>';
            }
        }
    }
    ?>
    <?php

        /*$USSER = "Carlos";
        $PASSS = "2112";

        $USER = $_POST["txtUser"];
        $PASS = $_POST["txtPassword"];

        if ($USER === $USSER && $PASS === $PASSS) {
            
            session_start();
            
            $_SESSION["txtUser"] = $USER;
            
            header("Location: index_user.php");
        } else {
            
            echo "El usuario o la contraseña son incorrectos";
        }
        */?>
</body>
</html>