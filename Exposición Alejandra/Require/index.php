<?php

/*require inserta un código procedente de otro archivo,  pero en caso de no existir el archivo o error en el mismo mostrará un
‘fatal error‘ y el script no se sigue ejecutando.
Usaría require siempre que el código sea importante (Funciones reutilizables de PHP, configuraciones…),
mientras que include lo usaría en casos en los que el código no es vital para la ejecución del script (cabeceras y pies HTML o similares).*/

echo 'Iniciando ejecución<br />';

include './requere.php';

echo 'Finalizando ejecución';
