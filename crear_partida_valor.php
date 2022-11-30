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
        <title>Crear Torneo</title>
        <link rel="icon" href="icono_aiep..ico">
    </head>
    <body background="valor_fondo.webp" >
    <?php error_reporting(0);?>
        <header style="background-color:#36469B">
                    <p align="right"><img  src="icono_usuario.png" height="33.51" width="44" align="right"><a href="Agregar_usuario-1.php">Registrarse </a></p>
                    <a href="Index.php"><img src="aiep_logo.png" width="200" height="70"></a>
            </header>
        <form method="post"><center>
            <table style="background-color:grey">
                <tr>
                    <td><h4>Anfitrion: <input type="text" name="txtHost" value="<?php echo "$id1";?>" autocomplete="off"></td>
                    
                    <td><h4>Nombre del torneo: <input type="text" name="txtNametr" value="" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>
                        <h4>Modo de juego: <select name="slcParty">
                            <option value="0">Duelo por equipos</option>
                            <option value="1">Spike Rush</option>
                            <option value="2">Replication</option>
                    </td>
                    <td>
                        <h4>Fecha del torneo: <input type="datetime-local" id="start" name="dateTime" value="2022-06-07" min="2022-06-07" max="2100-12-31">
                    </td>
                </tr>
                <tr>
                    <td><h4>Descripción: </h2><textarea name="txtAreaDs" rows="20" cols="80"></textarea></td>
                    
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnSave" value="Registrar">
                    </td>
                </tr>
                </table></center>
        </form>
        <?php
if ($_POST['btnSave'] == "Registrar"){
        
    $cnn = Conectar();
    $IDU = $_POST['txtHost'];
    $NAMET = $_POST['txtNametr'];
    $MODE = $_POST['slcParty'];
    $DATE = $_POST['dateTime'];
    $DESC = $_POST['txtAreaDs'];
    //$sql = "insert into party VALUES (NULL,'$NAME','$MODE',$DATE,'$DESC',0)";
    $sql = "INSERT INTO `party` (`id_party`, `host`, `name`, `game_mode`, `fecha`, `descripcion`, `game`) VALUES (NULL, $IDU, '$NAMET','$MODE', '$DATE', 
    '$DESC', 2)    "; 
    //"INSERT INTO party VALUES (DEFAULT, '$id1','$NAME','$MODE','$DATE','$DESC',0)";
    
    //mysqli_query($cnn,$sql);
    if($resul = $cnn->query($sql)){
        echo "registrado";
    }else{
        echo "fallido registro";
        echo mysqli_error($cnn);
    }
    //echo "<script>alert('Felicidades, te has registrado exitosamente)</script>";
    //echo "<script type='text/javascript'>window.location='crear_partida_2_cs_go.php'</script>";
    }else{
    
    }
 
?>
    </body>
</html>