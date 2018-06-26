<?php
/*PHP soporta un operador de control de errores: el signo de arroba (@). Cuando se antepone a una expresión en PHP,
cualquier mensaje de error que pueden ser generado por esa expresión será ignorado.*/
/* Error intencional de archivo */
$my_file = @file ('non_existent_file') or
    die ("La apertura de archivo ha fallado: el error fue '$php_errormsg'");

// esto funciona con cualquier expresión, no solo con funciones:
$value = $cache[$key];
// no producirá una anotación si el índice $key no existe.
?>
