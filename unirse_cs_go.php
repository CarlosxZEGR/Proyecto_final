<?php
    session_start();
    include("Funcion.php");
    if (isset($_SESSION['sesion']) && $_SESSION['type'] == 1) {
        $usuario = $_SESSION['sesion'];
        $id = $_SESSION['id'];
    }
    $nombre = strtoupper($usuario);
    $id1 = strtoupper($id);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Unirse a Partida</title>
        <link rel="icon" href="icono_aiep..ico">
    </head>
    <body background="cs_go_fondo.jpg" >
    <header style="background-color:#36469B">
                <p align="right"><img  src="icono_usuario.png" height="33.51" width="44" align="right"></p>
                <a href="Index.php"><img src="aiep_logo.png" width="200" height="70"></a>
        </header>
        <h2 style="color:white" style="background-color:grey">Partidas disponibles</h2>
        <?php
        include("Funcion.php");
        $cnn = Conectar();
            $sql="SELECT * FROM party p INNER JOIN usuario u ON p.host = u.id_usuario";
            $resul = mysqli_query($cnn,$sql);

            while($mostrar=mysqli_fetch_array($resul)){
        ?>
        <center><table background="color_grey.png" border="1">
            <tr>
                <td ><center>
                    <table>
                        <tr>
                            <td>Host:  </td>
                            <td>Nombre de la partida:  </td>
                            <td>Modo de juego:  </td>
                            <td>Fecha:  </td>
                        </tr>
                        <tr>
                            <td><?php echo $mostrar['user'];?></td>
                            <td><?php echo $mostrar['name'];?></td>
                            <td><?php echo $mostrar['game_mode'];?></td>
                            <td><?php echo $mostrar['fecha'];?></td>
                       
                        </tr></table>
                    <?php }
                    ?>
    </body>
</html>