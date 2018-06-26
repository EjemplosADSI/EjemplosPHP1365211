<?php
echo "Ejemplo #1 Asociatividad<br>";
$a = 3 * 3 % 5; // (3 * 3) % 5 = 4
// la asociatividad del operador ternario difiere de C/C++
$a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2

$a = 1;
$b = 2;
echo $a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5
echo "<hr>";
//La precedencia y asociatividad de los operadores solamente determinan cómo se agrupan las expresiones, no especifican un orden de evaluación. PHP no especifica (en general) el orden en que se evalúa una expresión y se debería evitar el código que se asume un orden específico de evaluación, ya que el comportamiento puede cambiar entre versiones de PHP o dependiendo de código circundante.


echo "Ejemplo #2 Orden de evaluación no definido<br>";
$a = 1;
echo ($a + $a++)."<br><hr>"; // podría mostrar 2 o 3

$i = 1;
$array[$i] = $i++; // podría establecer el índice a 1 o 2
echo "Ejemplo #3 +, - y . tienen la misma precedencia";
$x = 4;
// esta línea podría resultar en una salida inesperada:
echo "x menos uno igual a " . ($x-1) . ", o eso espero\n";
// ya que se evalúa como esta línea:
echo ("x menos uno igual a " .( $x - 1)) . ", o eso espero\n";
// la precedencia deseada se puede forzar con paréntesis:
echo "x menos uno igual a " . ($x-1) . ", o eso espero\n";
?>
