<?php

/** Cuando una clase extendida sobrescribe la definición parent de 
 * un método, PHP no invocará al método parent. Depende de la clase 
 * extendida el hecho de llamar o no al método parent. Esto también 
 * se aplica a definiciones de métodos Constructores y Destructores, 
 * Sobrecarga, y Mágicos.
 * 
 * Ejemplo #3 Invocando a un método parent */

class MyClass
{
    protected function myFunc() {
        echo "MyClass::myFunc()\n";
    }
}

class OtherClass extends MyClass
{
    // Sobrescritura de definición parent
    public function myFunc()
    {
        // Pero todavía se puede llamar a la función parent
        parent::myFunc();
        echo "OtherClass::myFunc()\n";
    }
}

$class = new OtherClass();
$class->myFunc();
?>