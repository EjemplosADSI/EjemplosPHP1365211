<?php
//Ejemplo	Nombre	Resultado
//$a & $b	And (y)	Los bits que están activos en ambos $a y $b son activados.
//$a | $b	Or (o inclusivo)	Los bits que están activos ya sea en $a o en $b son activados.
//$a ^ $b	Xor (o exclusivo)	Los bits que están activos en $a o en $b, pero no en ambos, son activados.
//~ $a	Not (no)	Los bits que están activos en $a son desactivados, y viceversa.
//$a << $b	Shift left(desplazamiento a izquierda)	Desplaza los bits de $a, $b pasos a la izquierda (cada paso quiere decir "multiplicar por dos").
//$a >> $b	Shift right (desplazamiento a derecha)	Desplaza los bits de $a, $b pasos a la derecha (cada paso quiere decir "dividir por dos").

/*
 * Ignore la sección superior,
 * es sólo el formateado para hacer la salida más clara.
 */

$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)'
        . ' %3$s (%4$2d = %4$04b)' . "\n";

echo <<<EOH
 ---------     ---------  -- ---------<br>
 resultado     valor      op prueba<br>
 ---------     ---------  -- ---------<br>
EOH;


/*
 * Aquí están los ejemplos.
 */

$values = array(0, 1, 2, 4, 8);
$test = 1 + 4;

echo "\n AND bit a bit \n";
foreach ($values as $value) {
    $result = $value & $test;
    printf($format, $result, $value, '&', $test);
}

echo "\n OR inclusivo bit a bit \n";
foreach ($values as $value) {
    $result = $value | $test;
    printf($format, $result, $value, '|', $test);
}

echo "\n OR exclusivo (XOR) bit a bit \n";
foreach ($values as $value) {
    $result = $value ^ $test;
    printf($format, $result, $value, '^', $test);
}
?>
