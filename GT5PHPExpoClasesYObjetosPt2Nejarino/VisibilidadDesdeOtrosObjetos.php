<?php

/**Los objetos del mismo tipo tendrán acceso a los miembros private y 
 * protected entre ellos aunque no sean de la misma instancia. 
 * Esto es porque los detalles específicos de implementación ya se 
 * conocen cuando se encuentra dentro de estos objetos.
 * 
 * Ejemplo #4 Accediendo a miembros private del mismo tipo de objeto: */

class Test
{
    private $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    private function bar()
    {
        echo 'Método private accedido.';
    }

    public function baz(Test $other)
    {
        // Se puede cambiar la propiedad private:
        $other->foo = 'hola';
        var_dump($other->foo);

        // También se puede invocar al método private:
        $other->bar();
    }
}

$test = new Test('test');

$test->baz(new Test('other'));
?>