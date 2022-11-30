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
<body background="valor_fondo.webp">
    <?php error_reporting(0); ?>
    <header style="background-color:#36469B">
            <p align="right"><img  src="icono_usuario.png" height="33.51" width="44" align="right"></p>
            <a href="Index.php"><img src="aiep_logo.png" width="200" height="70"></a>
    </header>
    <h2 style="color:white" style="background-color:grey">Partidas disponibles</h2>
<?php

    $cnn = Conectar();
        $sql="SELECT * FROM party p INNER JOIN usuario u ON p.host = u.id_usuario WHERE game = 0";
        $resul = mysqli_query($cnn,$sql);
        while($mostrar=mysqli_fetch_array($resul)){
            
    ?>
        <table background="color_grey.png" border="1"><div style="background-color:#964242" class="container p-5 my-5  text-white">
        <p></p>
        <form name="" method="post">
            party: <input type="text" name="party" value="<?php echo $mostrar['id_party']; ?>" readonly>
            Host: <?php echo $mostrar['user'];?>
            Nombre de la partida: <?php echo $mostrar['name'];?>
            Modo de juego: <?php echo $mostrar['game_mode'];?>
            Fecha y hora: <?php echo $mostrar['fecha'];?>
            <button type="submit" name="btnIns" value="Inscribirse">
        </div></table></form>
        <?php }?>
        <?php
            if ($_POST['btnIns'] == "Inscribirse"){
                echo ("holas");
                $cnn = Conectar();
                $party = $_POST['party'];
                $con = "INSERT INTO `waiting_list`( `id_user`, `id_party`, `id_game`) VALUES ($id1,$party,0)";
                //"INSERT INTO waiting_list VALUEs (NULL,$id1,$idParty,0)";
                
                if($resul = $cnn->query($con)){
                    echo "registrado";
                }else{
                    echo "fallido registro";
                    echo mysqli_error($cnn);
                }}
                /*$ssql = "INSERT INTO  party('id_party') VALUES ('')"; 
 
                //sacar el id A_I que se insertó en esta consulta la variable conexion se refiere a la variable de la conexion
                
                if (mysqli_query($cnn,$ssql))
                { 
                $ultimo_id = mysqli_insert_id($cnn); 
                echo $ultimo_id; 
                }else{ 
                echo "La inserción no se realizó"; 
                }
                
                //luego la insertamos en la otra tabla 
                
                mysqli_query($cnn, "INSERT INTO waiting_list (id_list,id_user,id_party,id_game) VALUES (NULL,'$id1,$ultimo_id,0')");
                }

               
                //$con = "INSERT INTO `waiting_list`(`id_list`, `id_user`, `id_party`, `id_game`) VALUES (NULL,$id1,3,0)";
                //"INSERT INTO waiting_list VALUES (NULL,$id1,$idParty,0)";
                
               // $result = mysqli_query($cnn,$con);
                //echo "$idParty";*/
                
            else{
                
            }
        ?>
</body>
</html>