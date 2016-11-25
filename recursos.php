
<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include "include/inc_head.php"; ?>
  </head>

  <body>

    <div class="container">

<?php include "include/inc_menu.php";

    if( isset($_GET["accion"]) && $_GET["accion"] = "agregarRecurso") {
      include "include/formularioRecurso.php";
    } else {
      include "include/listadoRecurso.php";
    }

$mysqli = new mysqli("localhost", "mi_usuario", "mi_contraseña", "world");

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}

$consulta = "SELECT , CountryCode FROM City ORDER by ID DESC LIMIT 50,5";

if ($resultado = $mysqli->query($consulta)) {

    /* obtener el array de objetos */
    while ($obj = $resultado->fetch_object()) {
        printf ("%s (%s)\n", $obj->Name, $obj->CountryCode);
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}

/* cerrar la conexión */
$mysqli->close();
?>
?>
      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>
