
<?php
/*El operador básico de asignación es "=". Se podría inclinar a pensar primero que es como un "igual a".
No lo es. Realmente significa que el operando de la izquierda se establece con el valor de la expresión de la derecha (es decir, "se define como").
El valor de una expresión de asignación es el valor asignado.
Es decir, el valor de "$a = 3" es de 3. Esto permite hacer algunas cosas intrincadas:*/

$a = ($b = 4) + 5; // ahora $a es igual a 9 y $b se ha establecido en 4.
echo $a."<hr>";
?>
