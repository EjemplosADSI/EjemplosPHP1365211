<?php
// En este ejemplo vamos a pasar una variable array:
$array = ['perro', 'gato', 'avestruz'];
function mostrarAnimales($animales)
    {
        foreach ($animales as $animal){
            echo $animal . "<br>";
        }
    }

    mostrarAnimales($array);
	echo "<hr>";

//POR REFERENCIA: Por defecto, los argumentos de las funciones son pasados por valor
// (así, si el valor del argumento dentro de la función cambia, este no cambia fuera de la función).
//Para permitir a una función modificar sus argumentos, éstos deben pasarse por referencia.

function añadir_algo(&$cadena)
{
    $cadena .= 'y algo más.<br>';
}
$cad = 'Esto es una cadena, ';
añadir_algo($cad);
echo $cad;    // imprime 'Esto es una cadena, y algo más.'
echo "<hr>";


//ARGUMENTOS PREDETERMINADOS
function hacer_café($tipo = "capuchino")
{
    return "Hacer una taza de $tipo. <br>";
}
echo hacer_café();
echo hacer_café(null);
echo hacer_café("espresso");
echo "<hr>";

//Obsérvese que cuando se emplean argumentos predeterminados, cualquiera de ellos debería estar a la derecha
// de los argumentos no predeterminados; si no, las cosas no funcionarán como se esperaba

/*function hacer_yogur($tipo = "acidófilo", $sabor)
{
    return "Hacer un tazón de yogur $tipo de $sabor.\n";
}

echo hacer_yogur("frambuesa");   // no funcionará como se esperaba
echo "<hr>";*/

//Manera Correcta

function hacer_yogurt($sabor, $tipo = "acidófilo")
{
    return "Hacer un tazón de yogur $tipo de $sabor.<br>";
}

echo hacer_yogurt("frambuesa");   // funciona como se esperaba
echo "<hr>";

//En PHP 5.6 y posteriores, las listas de argumentos pueden incluir el token ...
// para denotar que la función acepta un número variable de argumentos. Los argumentos serán pasados a la variable dada como un array

function sum(...$números) {
    $acc = 0;
    foreach ($números as $n) {
        $acc += $n;
    }
    return $acc;
}

echo sum(1, 2, 3, 4,5);
