<html>
    <head>
        <title>AIEP GAMING</title>
        <link rel="icon" href="icono_aiep..ico">
    </head>
    <body background="Fondo_index3.jpg" >
        <header style="background-color:#36469B">
                <colspan="2"><p align="right"><a href="usuario.php"><img  src="icono_usuario.png" height="33.51" width="44" align="right"></a><a href="logout.php">Cerrar Sesión</a></p>
                <colspan="2"><img src="aiep_logo.png" width="200" height="70">
                <?php
                 @session_start();
                 session_destroy();
                    header("Location: index.php");
?>
        </header>
            
            <center>
            <a href="https://www.eneba.com/latam/"><colspan="4"><img src="eneba_logopng.webp" height="550" width="342" align="left"  border="0" ></a>
            <a href="cs_go.php"><colspan="4"><img src="cs_go2.png" height="550" width="342" align="center"  border="0" ></a>
            <a href="lol.php"><colspan="4"><img src="lol.png" height="550" width="342" align="center"  border="0" ></a>
            <a href="valor.php"><colspan="4"><img src="valor.png" height="550" width="342" align="center" border="0" ></a>
            <a href="https://www.g2a.com/es/"><colspan="4"><img src="g2a_logo.svg" height="550" width="342" align="right" border="0" ></a>
            </center>
            <nav>
            <ul style=color.png>
                <h3 style="color:red">Paginas que pueden interesarte</h3>
                <img src="solotodo_logo.svg" width="160" height="50">
                <li style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'"><a style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'" href="https://www.solotodo.cl/"><h3>SoloTodo</h3></a></li>
                <img src="eneba_logo.svg" width="100" height="50">
                <li style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'"><a style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'" href="https://www.eneba.com/latam/"><h3>Eneba</h3></a></li>
                <img src="technical_city_logo.webp" width="160" height="50">
                <li style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'"><a style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'" href="https://technical.city/es/can-i-run-it"><h3>Can i run it?</h3></a></li>
                <img src="g2a_logo.svg" width="160" height="50">
                <li style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'"><a style="color:red" onMouseover="this.style.color='white'" onMouseout="this.style.color='red'" href="https://www.g2a.com/es/"><h3>G2A</h3></a></li>
            </ul></nav>
            <center style="color:red">Revisa nuestro calendario para que sepas cuando te toca</center> 
            <center>               
                <colspan="3"><img src="calendario_index.png" align="center">
                <colspan="3"><img src="chat.png" height="400" width="350" align="right">
            </center>
        <footer style="background-color:grey">
            <table>
                <tr>
                    <colspan="3"<td><h3 style="color:white">contactos</h3></td>
                </tr>
                <tr>
                    <colspan="3"<td><h5 style="color:white"> Estamos en redes sociales. Siguenos y mantente informado.</h3></td>
                </tr>
                <tr>
                    <colspan="3"<td><img src="gmail_logo.png" height="40" widht="40"></td>
                    <colspan="3"<td><img src="twitch_logo.png" height="40" width="40"></td>
                    <colspan="3"<td><img src="instagram_logo.png" height="40" width="40"></td>
                </tr>
            </table>
        </footer>
    </body>
</html>