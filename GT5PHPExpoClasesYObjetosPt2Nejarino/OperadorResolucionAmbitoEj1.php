<?php

/** El Operador de Resolución de Ámbito (::) 
 * 
 * (también denominado Paamayim Nekudotayim) 
 * o en términos simples, el doble dos-puntos, es un token que permite acceder 
 * a elementos estáticos, constantes, y sobrescribir propiedades o métodos de una clase.

*Cuando se hace referencia a estos items desde el exterior de la definición de 
*la clase, se utiliza el nombre de la clase.

*A partir de PHP 5.3.0, es posible hacer referencia a una clase usando una variable. 
*El valor de la variable no puede ser una palabra clave (por ej., self, parent y static).

*Paamayim Nekudotayim podría, en un principio, parecer una extraña elección para 
*bautizar a un doble dos-puntos. Sin embargo, mientras se escribía el 
*Zend Engine 0.5 (que utilizó PHP 3), asi es como el equipo Zend decidió bautizarlo. 
*En realidad, significa doble dos-puntos - en Hebreo!*/

/**Ejemplo #1 :: desde el exterior de la definición de la clase */

class MyClass {
    const CONST_VALUE = 'Un valor constante';
}

$classname = 'MyClass';
echo $classname::CONST_VALUE; // A partir de PHP 5.3.0

echo MyClass::CONST_VALUE;
?>