<?php

/** Si un trait define una propiedad, una clase no puede definir 
 * una propiedad con el mismo nombre, a menos que sea compatible 
 * (misma visibilidad y mismo valor inicial), si no, se emitirá 
 * un error fatal. Antes de PHP 7.0, definir una propiedad en 
 * una clase con la misma visibilidad y el mismo valor inicial 
 * que en el rasgo, emitía un aviso E_STRICT. */

trait PropiedadesTrait {
    public $misma = true;
    public $diferente = false;
}

class EjemploPropiedades {
    use PropiedadesTrait;
    public $misma = true; // Permitido a partir de PHP 7.0.0; aviso E_STRICT anteriormente
    public $diferente = true; // Error fatal
}
?>