<?php
/**
 * A partir de PHP 7.1.0, las constantes de clase se pueden definir como 
 * públicas, privadas o protegidas. Las constantes declaradas sin una 
 * visibilidad explítica serán definidas como públicas.
 * 
 * Ejemplo #3 Declaración de constantes a partir de PHP 7.1.0:
 * 
 * Definir MiClase
 */
class MiClase
{
    // Declarar una constante pública
    public const MY_PUBLIC = 'public';

    // Declarar una constante protegida
    protected const MY_PROTECTED = 'protected';

    // Declarar una constante privada
    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

$myclass = new MiClase();
MiClase::MY_PUBLIC; // Funciona
MiClase::MY_PROTECTED; // Error fatal
MiClase::MY_PRIVATE; // Error fatal
$myclass->foo(); // Funcionan Public, Protected y Private


/**
 * Definir MiClase2
 */
class MiClase2 extends MiClase
{
    // Esta es pública
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE; // Error fatal
    }
}

$myclass2 = new MiClase2;
echo MiClase2::MY_PUBLIC; // Funciona
$myclass2->foo2(); // Funcionan Public y Protected, pero no Private
?>