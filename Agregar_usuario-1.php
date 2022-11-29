<!doctype html>
<html>
    <head>
        <title>Registrar Usuario</title>
        <link rel="icon" href="icono_aiep..ico">
    </head>
    <body background="Fondo_index2.jpg" width="200" height="70">
    <?php error_reporting(0);?>
        <header style="background-color:#36469B">
            <p align="right"><img  src="icono_usuario.png" height="33.51" width="44" align="right"><a href="Agregar_usuario-1.php">Registrarse </a></p>
            <a href="Index.php"><img src="aiep_logo.png" width="200" height="70"></a>
            
        </header>
        

            
                    

            <center>
            <form  name="" method="Post">
            
                <table style=""> <h1 style="color: white">Crear cuenta</h1>
                    <tr>
                        <td style="color: white">Nombre de Usuario: </td>
                        <td><input type="text" name="txtUser" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td style="color: white">Contraseña: </td>
                        <td><input type="password" name="txtPassword" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td style="color: white">Correo:</td>
                        <td><input type="text" name="txtGmail" value="" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="btnSave" value="Registrarse"></td>  
                    </tr>
                </table></form>
            <?php
                    
                    if ($_POST['btnSave'] == "Registrarse"){
                    
                        include("Funcion.php");
                        $cnn = Conectar();
                        
                        $User = $_POST['txtUser'];
                        $Pass = $_POST['txtPassword'];
                        $Gmail = $_POST['txtGmail'];

                        
                        $sql = "insert into usuario(name,password,gmail,type_user) values('$User','$Pass','$Gmail',1)";
                        
                        mysqli_query($cnn,$sql);
                        echo "<script>alert('Felicidades, te has registrado exitosamente)</script>";
                        
                    }
            ?>
        
        
        
    </body>
</html>