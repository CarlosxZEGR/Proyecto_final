
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
    
    <form action="sesion.php" method="post">
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
                
                
            </tr>
        </table>
        <td><button type="submit" name="btnIniciar"><td>
        Registrarse
        </center>
    </form>
    
</body>
</html>