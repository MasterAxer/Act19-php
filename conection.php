<html>
    <head>
    <title>Envio de informaci&oacute;n</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.css">
</head>
    <body>
    <!--Banner de bulma-->
        <section class="hero is-primary">
            <div class="hero-body">
                <div class="container">
                <h1 class="title">Universidad de Colima</h1>
                <h2 class="subtitle">Facultad de Telemática</h2>
                </div>
            </div>
        </section>
        <!-----Cuerpo del documento---->
            <div class="container">
                <div class="has-text-centered">
                    <h1 class="title is-1">Control de usuarios<br></h1>
                    <div class="box has-text-justified">
                    <?php
                        $nombre=$_POST['nombre'];
                        $correo=$_POST['email'];
                        $conexion=mysqli_connect('localhost','root','', 'progradb') or die ("Error al conectar con la base de datos");
                        $consulta="SELECT * FROM usuarios WHERE nombre='$nombre' and correo='$correo'";
                        $resultado=mysqli_query($conexion, $consulta);
                        $filas=mysqli_num_rows($resultado);
                        if($filas>0){
                            header ("location:checausr.php");
                        }
                        else{
                            echo "<h1 class='title has-text-centered is-3'>El usuario no existe<br>";
                            echo "<br><a href='index.php'><input class='button is-link' type='button' value='Regresar'></a>";
                        }
                        mysqli_free_result($resultado);
                        mysqli_close($conexion);
                    ?>
                    </div>
                </div>
            </div>
            <!--Footer de bulma-->
        <footer class="footer">
            <div class="content has-text-centered">
                <p>
                <strong>&copy;Desarrollado</strong> por <a href="https://github.com/MasterAxer" target="_blank">Jorge López</a>. 
                </p>
            </div>
        </footer>
    </body>
</html>