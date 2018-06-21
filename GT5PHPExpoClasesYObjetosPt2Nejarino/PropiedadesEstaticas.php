<?php

/** No se puede acceder a las propiedades estáticas a través 
 * del objeto utilizando el operador flecha (->).
 * 
 * Como cualquier otra variable estática de PHP, las propiedades 
 * estáticas sólo pueden ser inicializadas utilizando un string literal 
 * o una constante; las expresiones no están permitidas. Por tanto, 
 * se puede inicializar una propiedad estática con enteros o arrays (por ejemplo), 
 * pero no se puede hacer con otra variable, con el valor de 
 * devolución de una función, o con un objeto.
 * 
 * A partir de PHP 5.3.0, es posible hacer referencia a una clase 
 * usando una variable. El valor de la variable no puede ser 
 * una palabra reservada (p.ej., self, parent y static).
 * 
 * Ejemplo #2 Ejemplo de propiedad estática */

class Foo
{
    public static $mi_static = 'foo';

    public function valorStatic() {
        return self::$mi_static;
    }
}

class Bar extends Foo
{
    public function fooStatic() {
        return parent::$mi_static;
    }
}


print Foo::$mi_static . "\n";

$foo = new Foo();
print $foo->valorStatic() . "\n";
print $foo->mi_static . "\n";      // "Propiedad" mi_static no definida

print $foo::$mi_static . "\n";
$nombreClase = 'Foo';
print $nombreClase::$mi_static . "\n"; // A partir de PHP 5.3.0

print Bar::$mi_static . "\n";
$bar = new Bar();
print $bar->fooStatic() . "\n";
?>