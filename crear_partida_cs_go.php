<?php 
	session_start();
	
	if(! isset($_SESSION['id_usuario']))
	{
		session_destroy();
		//header ("Location: index.php");
		?>  <script type="text/javascript">window.location="Index.php";</script><?php 
	}else{
	
	
	} 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Crear Torneo</title>
        <link rel="icon" href="icono_aiep..ico">
    </head>
    <body background="cs_go_fondo.jpg" >
        
        <header style="background-color:#36469B">
                    <p align="right"><img  src="icono_usuario.png" height="33.51" width="44" align="right"><a href="Agregar_usuario-1.php">Registrarse </a></p>
                    <a href="Index.php"><img src="aiep_logo.png" width="200" height="70"></a>
            </header>
        <form name="" method="post"><center>
            <?php error_reporting(0); ?>
            <table style="background-color:grey">
                <tr>
                    <td><h4 >Anfitrion: <input type="text" name="txtHost" value="tu nombre" autocomplete="off"></td>
                    
                    <td><h4 >Nombre del torneo: <input type="text" name="txtNametr" value="" autocomplete="off"></td>
                </tr>
                <tr>
                    <td>
                        <h4 >Modo de juego: <select name="slcParty">
                            <option value="Desactivar la bomba">Desactivar la bomba</option>
                            <option value="DeathMatch">DeathMatch</option>
                            <option value="Desactivar la bomba (Clasificatorias)">Desactivar la bomba (Clasificatorias)</option>
                    </td>
                    <td>
                        <h4>Fecha del torneo: <input type="datetime-local" id="start" name="dateTime" >
                    </td>
                </tr>
                <tr>
                    <td><h4 >Descripción: </h2><textarea name="txtAreaDs" rows="20" cols="80"></textarea></td>
                    
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
        include("Funcion.php");
        $cnn = Conectar();
        $NAME = $_POST['txtNametr'];
        $MODE = $_POST['slcParty'];
        $DATE = $_POST['dateTime'];
        $DESC = $_POST['txtAreaDs'];
        //$sql = "insert into party VALUES (NULL,'$NAME','$MODE',$DATE,'$DESC',0)";
        $sql = "insert into party VALUES (null, '1','$NAME','$MODE','$DATE','$DESC',0)";
        
        mysqli_query($cnn,$sql);
        echo "<script>alert('Felicidades, te has registrado exitosamente)</script>";
        //echo "<script type='text/javascript'>window.location='crear_partida_2_cs_go.php'</script>";
    }
    ?>
        
    </body>
</html>