<?php

/** La herencia es un principio de programación bien establecido y PHP hace uso de él 
 * en su modelado de objetos. Este principio afectará la manera en que muchas clases 
 * y objetos se relacionan unas con otras.
 * Por ejemplo, cuando se extiende una clase, la subclase hereda todos los métodos 
 * públicos y protegidos de la clase padre. A menos que una clase sobrescriba esos 
 * métodos, mantendrán su funcionalidad original.
 * Esto es útil para la definición y abstracción de la funcionalidad y permite la 
 * implementación de funcionalidad adicional en objetos similares sin la necesidad 
 * de reimplementar toda la funcionalidad compartida. */

 /** Ejemplo #1 Ejemplo de herencia: */

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . PHP_EOL;
    }
    
    public function printPHP()
    {
        echo 'PHP is great.' . PHP_EOL;
    }
}

class bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . PHP_EOL;
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Salida: 'Foo: baz'
$foo->printPHP();       // Salida: 'PHP is great' 
$bar->printItem('baz'); // Salida: 'Bar: baz'
$bar->printPHP();       // Salida: 'PHP is great'

/** Nota:
 * A menos que la carga automática sea utilizada, entonces las clases 
 * deben ser definidas antes de ser usadas. Si una clase se extiende a 
 * otra, entonces la clase padre debe ser declarada antes de la estructura 
 * de clase hija. Esta regla se aplica a las clases que heredan de otras 
 * clases e interfaces. */

?>