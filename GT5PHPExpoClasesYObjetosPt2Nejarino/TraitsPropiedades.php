<?php

/** Los traits también pueden definir propiedades. */

trait PropiedadesTrait {
    public $x = 1;
}

class EjemploPropiedades {
    use PropiedadesTrait;
}

$ejemplo = new EjemploPropiedades;
$ejemplo->x;
?>