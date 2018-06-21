<?php

/** Los miembros heredados de una clase base se sobrescriben 
 * cuando se inserta otro miembro homónimo desde un Trait. 
 * De acuerdo con el orden de precedencia, los miembros de 
 * la clase actual sobrescriben los métodos del Trait, que 
 * a su vez sobrescribe los métodos heredados. */

 /** Ejemplo:
  * Se sobrescribe un miembro de la clase base con el método 
  *insertado en MiHolaMundo a partir del Trait DecirMundo. 
  *El comportamiento es el mismo para los métodos definidos en 
  *la clase MiHolaMundo. Según el orden de precedencia los métodos 
  *de la clase actual sobrescriben los métodos del Trait, a la vez 
  *que el Trait sobrescribe los métodos de la clase base.
  */

class Base {
    public function decirHola() {
        echo '¡Hola ';
    }
}

trait DecirMundo {
    public function decirHola() {
        parent::decirHola();
        echo 'Mundo!';
    }
}

class MiHolaMundo extends Base {
    use DecirMundo;
}

$o = new MiHolaMundo();
$o->decirHola();
?>