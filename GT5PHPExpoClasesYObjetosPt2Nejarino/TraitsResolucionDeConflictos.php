<?php

/** Si dos Traits insertan un método con el mismo nombre, s
 * e produce un error fatal, siempre y cuando no se haya 
 * resuelto explicitamente el conflicto.

*Para resolver los conflictos de nombres entre Traits 
*en una misma clase, se debe usar el operador insteadof 
*para elegir unívocamente uno de los métodos conflictivos.

*Como esto solamente permite excluir métodos, se puede 
*utilizar el operador as para añadir un alias a uno de los métodos. 
*Observe que el operador as no renombra el método ni afecta a 
*cualquier otro método. */

/** En este ejemplo, Talker utiliza los traits A y B. 
 * Como A y B tienen métodos conflictos, se define el 
 * uso de la variante de smallTalk del trait B, y 
 * la variante de bigTalk del trait A.

*Aliased_Talker hace uso del operador as para poder 
*usar la implementación de bigTalk de B, bajo el alias adicional talk. */

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

class Aliased_Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
        B::bigTalk as talk;
    }
}

/** Nota: Antes de PHP 7.0, definir una propiedad en una clase 
 * con el mismo nombre que en un rasgo lanzaba un E_STRICT si la 
 * definición de la clase era compatible (misma visivilidad y 
 * mismo valor inicial). */

?>