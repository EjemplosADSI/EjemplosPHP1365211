<?php
/** La visibilidad de una propiedad, un método o (a partir de PHP 7.1.0) una constante 
 * se puede definir anteponiendo a su declaración una de las palabras reservadas public, 
 * protected o private. A los miembros de clase declarados como 'public' se puede acceder 
 * desde donde sea; a los miembros declarados como 'protected', solo desde la misma clase 
 * o mediante clases heredadas. A los miembros declarados como 'private' únicamente se 
 * puede acceder desde la clase que los definió.
 * 
 * Visibilidad de propiedades...
 *  
 * Las propiedades de clases deben ser definidas como 'public', 'private' o 'protected'. 
 * Si se declaran usando var, serán definidas como 'public'.*/

/**
 * Ejemplo #1 Declaración de propiedades:
 * 
 * Definición de MyClass
 */

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public;    // Funciona bien
echo $obj->protected; // Error Fatal
echo $obj->private;   // Error Fatal
$obj->printHello();   // Muestra Public, Protected y Private


/**
 * Definición de MyClass2
 */
class MyClass2 extends MyClass
{
    // Se pueden redeclarar las propiedades pública y protegida, pero no la privada
    public $public = 'Public2';
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public;    // Funciona bien
echo $obj2->protected; // Error Fatal
echo $obj2->private;   // Undefined
$obj2->printHello();   // Muestra Public2, Protected2, Undefined

/** Nota: La forma de declaración de una variable de PHP 4 con la palabra clave var 
 * todavía es soportado (como un sinónimo de public) por razones de compatibilidad. 
 * En PHP 5 antes de 5.1.3, su uso genera un Warning E_STRICT. */
?>