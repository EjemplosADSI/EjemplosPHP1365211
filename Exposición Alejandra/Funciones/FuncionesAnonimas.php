<?php
//Las funciones anónimas son funciones sin nombre:
//Se puede llamar a una función anónima de dos formas:
// utilizando la sintaxis de funciones variables o llamarla desde otra función en forma de argumento.
$saludo = function() {
    return "Hola que tal <br>";
};

echo $saludo(); // Devuelve: Hola que tal
echo "<hr>";


function decir ($algo) {
    echo $algo();
}

decir(function(){
    return "Esto es algo<br>";
});


//Cuando se emplea use, se hereda una variable del ámbito padre. Esto no es lo mismo que usar variables globales.
// El ámbito padre de una clausura es el ámbito de la función en el que la clausura fue declarada (no desde la función desde la que se llamó).
$colorCoche = 'rojo';

$mostrarColor = function() use ($colorCoche) {
    echo "El color del coche es $colorCoche";
};

$mostrarColor(); // Mostrará El color del coche es rojo
