<?php
function cuadrado($num)
{
    return $num * $num;
}
echo cuadrado(5);   // imprime '16'.
echo "<br>";
//
function numeros_pequeños()
{
    return array (0, 1, 2);
}


$lista=list ($cero, $uno, $dos) = numeros_pequeños();

var_dump($lista);

function sum($a, $b): float{
    return $a + $b;
}

var_dump(sum(33, 36));

?>
