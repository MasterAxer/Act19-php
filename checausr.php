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
                    <button class="button is-success" style="position: absolute;left: 80%;">Agregar Usuario</button>
                    <br>
                    <div class="box has-text-justified">
                    <?php
                            
                        $conexion=mysqli_connect('localhost','root','', 'progradb') or die ("Error al conectar con la base de datos");
                        function mostrartabla($conexion){
                            $consulta="SELECT * FROM usuarios";
                            $resultado=mysqli_query($conexion,$consulta);
                               
                                while($fila=mysqli_fetch_array($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['id'];
                                    echo "<td>".$fila['nombre'];
                                    echo "<td>".$fila['correo'];
                                    echo "<td>".$fila['login'];
                                    echo "<td><button class='button is-link is-small'>Editar<button class='button is-danger is-small'>Borrar";
                                    echo "<tr>";
                                }
                            mysqli_close($conexion);
                        }
                    ?>
                        <table class="table is-fullwidth">
                            <thead>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Login</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                                <?=mostrartabla($conexion)?>
                            </tbody>
                        </table>                        
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