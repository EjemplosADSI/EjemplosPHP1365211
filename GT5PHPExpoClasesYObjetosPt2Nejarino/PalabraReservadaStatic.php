<?php

/** La palabra reservada 'static' */

/** Declarar propiedades o métodos de clases como estáticos los 
 * hacen accesibles sin la necesidad de instanciar la clase.
 * Una propiedad declarada como static no puede ser accedida con 
 * un objeto de clase instanciado (aunque un método estático sí lo 
 * puede hacer).
 * 
 * Por motivos de compatibilidad con PHP 4, si no se utiliza 
 * ninguna declaración de visibilidad, se tratará a las propiedades 
 * o métodos como si hubiesen sido definidos como public.
 * 
 * Métodos estáticos Debido a que los métodos estáticos se 
 * pueden invocar sin tener creada una instancia del objeto, la 
 * seudovariable $this no está disponible dentro de los métodos 
 * declarados como estáticos. */

 /** Precaución: En PHP 5, llamar a métodos no estáticos de forma 
  * estática genera una advertencia de nivel E_STRICT. */

  /** Advertencia:: En PHP 7, llamar a métodos no estáticos de forma 
   * estática está obsoleto y generará una advertencia E_DEPRECATED. 
   * El soporte para las llamadas a métodos no estáticos de forma 
   * estática podría ser eliminado en el futuro. */
  
   /** Ejemplo #1 Ejemplo de método estático */

class Foo {
    public static function unMetodoEstatico() {
        // ...
    }
}

Foo::unMetodoEstatico();
$nombre_clase = 'Foo';
$nombre_clase::unMetodoEstatico(); // A partir de PHP 5.3.0
?>