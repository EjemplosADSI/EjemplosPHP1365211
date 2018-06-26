<?php
/*Tanto include_once como require_once funcionan exactamente igual que include y require con la salvedad de que aunque
se llamen en múltiples ocasiones, si ya ha sido cargado una vez, PHP ignorará el resto de llamadas.*/

echo 'Iniciando ejecución<br />';

require_once './require_once.php';
require_once './require_once.php';
require_once './require_once.php';

echo 'Finalizando ejecución';
