<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h3,h1 {color: blue}
        h1 {text-align: center}
    </style>
    <title>Estructuras de Control</title>
</head>

<body>
<h1>Estructuras de Control</h1>
<br>
<hr>
<h3>If</h3>
<?php
    $x=5;
    $y=7;
    if($x<$y){
        echo "X es menor que Y";
    }
?>
<br><hr>

<h3>Else</h3>
<?php
    $a=1;
    $b=2;
    if ($a > $b) {
        echo "a es mayor que b";
    } else {
        echo "a NO es mayor que b";
    }
?>
<br><hr>

<h3>Elseif / ELse if</h3>
<?php
    $a = 8;
    $b = 8;
    if ($a > $b){
            echo $a." es mayor que ".$b;
    }elseif($a == $b){
        echo $a." es igual a ".$b;
    }else{
        echo $a." no es ni mayor ni igual a ".$b;
    }

?>
<br><hr>

<h3>Sintaxis Alternativa de Estructuras de Control</h3>
<?php
$a = 5;
if ($a == 5):
    ?>
    A es igual a 5
<?php endif; ?>
<br><br>
<?php
    $a = 8;
    $b = 8;
    if ($a > $b):
        echo $a." es mayor que ".$b;
    elseif ($a == $b):
        echo $a." es igual a ".$b;
    else:
        echo $a." no es ni mayor ni igual a ".$b;
    endif;
    ?>
<br><hr>

<h3>While</h3>
<?php
$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;
?>
<br><br>
<?php
$i=1;
while($i<=5):

    $j=1;
    while($j<=$i):
        echo"*&nbsp&nbsp";
        $j++;
    endwhile;

    echo"<br>";
    $i++;
endwhile;
?>
<br>
<hr>
<h3>Do- While</h3>
<?php
$i = 3;
do {
    echo $i;
    break;
} while ($i > 2);
?>
<br><br>
<?php
$a = 1;
do {
    echo $a;
    $a++;
} while ($a <= 10);
?>
<br><br>
</body>


</html>
