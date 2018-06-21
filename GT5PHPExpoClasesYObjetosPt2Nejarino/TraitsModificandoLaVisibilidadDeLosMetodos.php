<?php

/** Al usar el operador as, se puede también ajustar 
 * la visibilidad del método en la clase exhibida. */

trait HolaMundo {
    public function decirHola() {
        echo 'Hola Mundo!';
    }
}

// Cambiamos visibilidad de decirHola
class MiClase1 {
    use HolaMundo { decirHola as protected; }
}

// Método alias con visibilidad cambiada
// La visibilidad de decirHola no cambia
class MiClase2 {
  use HolaMundo { decirHola as private miPrivadoHola; }
}
?>