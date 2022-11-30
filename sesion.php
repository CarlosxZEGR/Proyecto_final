<?php
session_start();

$usuario = $_POST['txtUser'];
$contra = $_POST['txtPassword'];

include('Funcion.php');
$cnn = Conectar();
$st = "SELECT * FROM usuario WHERE user = '$usuario' && pass = '$contra'";
$sql = $cnn->query($st);
$rs = $sql->fetch_array(MYSQLI_BOTH);

$usuario = $rs['user'];
$contra = $rs['password'];
$id = $rs['id_usuario'];
$gmail = $rs['gmail'];
$type = $rs['type_user'];

if($rs){

    switch($type){
        case '1':
            $_SESSION['sesion'] = $usuario;
            $_SESSION['gmail'] = $gmail;
            $_SESSION['id'] = $id;
            $_SESSION['type'] = $type;
            echo "<script type=''text/javascript>window.location='Index.php'</script>";
            break;

        default:
        echo("usuario no encotrado");
        }                 
}else{
    
}

?>