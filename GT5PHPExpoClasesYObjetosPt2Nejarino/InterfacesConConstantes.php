<?php
interface a
{
    const b = 'Interface constant';
}

// Imprime: Interface constant
echo a::b;


// Sin embargo ésto no funcionará ya que no está permitido
// sobrescribir constantes
class b implements a
{
    const b = 'Class constant';
}

/** Una interfaz, junto con la determinación de tipos, proveen 
 * una buena forma de asegurarse que determinado objeto contiene 
 * métodos particulares. Vea el operador instanceof y la declaración de tipos. */

?>