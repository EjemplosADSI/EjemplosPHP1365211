<?php

/** Los traits soportan el uso de métodos abstractos 
 * para imponer requisitos a la clase a la que se exhiban. */

trait Hola {
    public function decirHolaMundo() {
        echo 'Hola'.$this->obtenerMundo();
    }
    abstract public function obtenerMundo();
}

class MiHolaMundo {
    private $mundo;
    use Hola;
    public function obtenerMundo() {
        return $this->mundo;
    }
    public function asignarMundo($val) {
        $this->mundo = $val;
    }
}
?>