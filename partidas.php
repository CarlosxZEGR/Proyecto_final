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
<html lang="es">
<head>
    <title>Unirse a Partida</title>
    <link rel="icon" href="icono_aiep..ico">
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body background="cs_go_fondo.jpg">
    <header style="background-color:#36469B">
            <p align="right"><img  src="icono_usuario.png" height="33.51" width="44" align="right"></p>
            <a href="Index.php"><img src="aiep_logo.png" width="200" height="70"></a>
    </header>
    <h2 style="color:white" style="background-color:grey">Partidas disponibles</h2>
<?php

    include("Funcion.php");
    $cnn=Conectar();
        $sql="SELECT * FROM party p INNER JOIN usuario u ON p.host = u.id_usuario";
        $resul = mysqli_query($cnn,$sql);
        while($mostrar=mysqli_fetch_array($resul)){
    ?>
        <table background="color_grey.png" border="1"><div style="background-color:#964242" class="container p-5 my-5  text-white">
        <p></p>
            Host: <?php echo $mostrar['user'];?>
            Nombre de la partida: <?php echo $mostrar['name'];?>
            Modo de juego: <?php echo $mostrar['game_mode'];?>
            Fecha y hora: <?php echo $mostrar['fecha'];?>
            <button type="submit" name="btnIns" value="Inscribirse">
        </div></table>
        <?php }
            if ($_POST['btnSave'] == "Registrar"){
 
                $cnn = Conectar();
        ?>
</body>
</html>