<?php
/* For */
echo "<h3>Ciclo For</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
/* Foreach */
echo "<br><hr>";

echo "<h3>Ciclo Foreach</h3>";

$a = array(1, 2, 3, 4);
foreach ($a as $v){
    echo "Valor actual de \$a: $v.\n";
}
echo "<br><hr>";
/* Break*/
echo "<h3>Break</h3>";
$i = 0;
while (++$i) {
    switch ($i) {
        case 5:
            echo "En 5<br />\n";
            break 1;  /* Sólo sale del switch. */
        case 10:
            echo "En 10; saliendo<br />\n";
            break 2;  /* Sale del switch y del while. */
        default:
            break;
    }
}
/* Continue*/
echo "<br><hr>";
echo "<h3>Continue</h3>";
for ($i=0; $i<10; $i++){
    if ($i % 2 == 0) {
        continue;
    }
        echo $i;


}
echo "<br><hr>";
/* Switch*/
echo "<h3>Switch</h3>";
$r = "op2";
switch ($r) {
    case "op1":
        echo "Primera opcion";
        echo "<br>";
        break;
    case "op2":
        echo "Segunda opcion";
        echo "<br>";
        break;
    case "op3":
        echo "Tercera opcion";
        echo "<br>";
        break;
}
echo "<br><hr>";
?>

