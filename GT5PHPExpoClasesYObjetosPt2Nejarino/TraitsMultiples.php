<?php

/** Se pueden insertar múltiples Traits en una clase, 
 * mediante una lista separada por comas en la sentencia use. */

trait Hola {
    public function decirHola() {
        echo 'Hola ';
    }
}

trait Mundo {
    public function decirMundo() {
        echo 'Mundo';
    }
}

class MiHolaMundo {
    use Hola, Mundo;
    public function decirAdmiración() {
        echo '!';
    }
}

$o = new MiHolaMundo();
$o->decirHola();
$o->decirMundo();
$o->decirAdmiración();
?>