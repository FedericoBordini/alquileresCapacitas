<!DOCTYPE html>
<html lang="es">
  <head>
    <?php include "include/inc_head.php"; ?>
  </head>
  <?php

// Realizar una consulta MySQL
$query = 'SELECT * FROM cliente';
$result = mysqli_query($link,$query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
  echo "\t<tr>\n";
  foreach ($line as $col_value) {
      echo "\t\t<td>$col_value</td>\n";
  }
  echo "\t</tr>\n";
}
echo "</table>\n";

   ?>
      <!-- Site footer -->
      <footer class="footer">
        <p></p>
      </footer>

    </div> <!-- /container -->



  </body>
</html>
