<?php

/** PHP 5 introduce clases y métodos abstractos. Las clases definidas 
 * como abstractas no se pueden instanciar y cualquier clase que 
 * contiene al menos un método abstracto debe ser definida como tal. 
 * Los métodos definidos como abstractos simplemente declaran la firma 
 * del método, pero no pueden definir la implementación.
 * 
 * Cuando se hereda de una clase abstracta, todos los métodos definidos 
 * como abstractos en la declaración de la clase madre deben ser definidos 
 * en la clase hija; además, estos métodos deben ser definidos con la 
 * misma (o con una menos restrictiva) visibilidad. Por ejemplo, si el método 
 * abstracto está definido como protegido, la implementación de la f
 * unción debe ser definida como protegida o pública, pero nunca como privada. 
 * Por otra parte, las firmas de los métodos tienen que coincidir, es decir, 
 * la declaración de tipos y el número de argumentos requeridos deben ser 
 * los mismos. Por ejemplo, si la clase derivada define un argumento opcional 
 * y la firma del método abstracto no lo hace, no habría conflicto con la firma. 
 * Esto también se aplica a los constructores a partir de PHP 5.4. 
 * Antes de PHP 5.4, las firmas del constructor podían ser diferentes. */

 /** Ejemplo de clase abstracta no.1 */

abstract class ClaseAbstracta
{
    // Forzar la extensión de clase para definir este método
    abstract protected function getValor();
    abstract protected function valorPrefijo($prefijo);

    // Método común
    public function imprimir() {
        print $this->getValor() . "\n";
    }
}

class ClaseConcreta1 extends ClaseAbstracta
{
    protected function getValor() {
        return "ClaseConcreta1";
    }

    public function valorPrefijo($prefijo) {
        return "{$prefijo}ClaseConcreta1";
    }
}

class ClaseConcreta2 extends ClaseAbstracta
{
    public function getValor() {
        return "ClaseConcreta2";
    }

    public function valorPrefijo($prefijo) {
        return "{$prefijo}ClaseConcreta2";
    }
}

$clase1 = new ClaseConcreta1;
$clase1->imprimir();
echo $clase1->valorPrefijo('FOO_') ."\n";

$clase2 = new ClaseConcreta2;
$clase2->imprimir();
echo $clase2->valorPrefijo('FOO_') ."\n";
?>